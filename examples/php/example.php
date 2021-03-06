<?php
#
# Copyright (c) 2015 Cossack Labs Limited
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
# http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
#
    include 'acrawriter.php';
    $message = "Test Message";
    $key_path = ".acrakeys/client_storage.pub";

    $dbconn = pg_connect("host=localhost port=9494 dbname=acra user=postgres password=postgres")
	or die('Could not connect: ' . pg_last_error());

    $query = 'CREATE TABLE IF NOT EXISTS testphp(id SERIAL PRIMARY KEY, data BYTEA, raw_data TEXT)';
    $result = pg_query($query) or die(pg_last_error());

    echo "load acra key ".$key_path."\n";
    $file = fopen($key_path, "r");
    $acra_key = fread($key_path, filesize($key_path));
    fclose($file);

    $acra_struct = pg_escape_bytea(create_acrastruct($message, $acra_key, null));

    $query = "insert into testphp (data, raw_data) values ('$acra_struct','$message')";
    $result = pg_query($query) or die(pg_last_error());

    $query = 'SELECT * FROM testphp';
    $result = pg_query($query) or die(pg_last_error());

    echo "\n";
    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
	echo "\n";
	foreach ($line as $col_value) {
    	    echo "$col_value\n";
	}
	echo "\n";
    }
    echo "\n";

    pg_free_result($result);

    pg_close($dbconn);

?>