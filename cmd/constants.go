package cmd

const (
	DEFAULT_ACRACONNECTOR_PORT                = 9494
	DEFAULT_ACRACONNECTOR_API_PORT            = 9191
	DEFAULT_ACRACONNECTOR_CONNECTION_PROTOCOL = "tcp"
	DEFAULT_ACRACONNECTOR_HOST                = "127.0.0.1"
	DEFAULT_ACRA_HOST                         = "0.0.0.0"
	DEFAULT_ACRASERVER_PORT                   = 9393
	DEFAULT_ACRASERVER_API_PORT               = 9090
	DEFAULT_ACRA_AUTH_PATH                    = "configs/auth.keys"
	DEFAULT_ACRA_CONNECTION_PROTOCOL          = "tcp"
	DEFAULT_ACRAWEBCONFIG_HOST                = "127.0.0.1"
	DEFAULT_ACRAWEBCONFIG_PORT                = 8000
	DEFAULT_ACRAWEBCONFIG_STATIC              = "cmd/acra-webconfig/static"
	DEFAULT_ACRAWEBCONFIG_AUTH_MODE           = "auth_on"
	ACRAWEBCONFIG_AUTH_ARGON2_LENGTH          = 32
	ACRAWEBCONFIG_AUTH_ARGON2_MEMORY          = 8 * 1024
	ACRAWEBCONFIG_AUTH_ARGON2_TIME            = 3
	ACRAWEBCONFIG_AUTH_ARGON2_THREADS         = 2
	DEFAULT_ACRATRANSLATOR_HTTP_HOST          = "0.0.0.0"
	DEFAULT_ACRATRANSLATOR_HTTP_PORT          = 9595
	DEFAULT_ACRATRANSLATOR_GRPC_HOST          = "0.0.0.0"
	DEFAULT_ACRATRANSLATOR_GRPC_PORT          = 9696
)
