# AbuseIO parser-bitninja
AbuseIO - BitNinja parser

# About BitNinja
BitNinja constantly monitors the number of simultaneous incoming and outgoing connections and blocks DoS (Denial of Service) attacks with our unique approach:

https://bitninja.io/features

# Usage

Read this document https://docs.abuse.io/en/latest/development_parsers/

- mkdir /opt/abuseio/vendor/abuseio/parser-bitninja
- Copy all repo files to that folder
- Run below commands

`php artisan cache:clear`
`php artisan clear-compiled`
`php artisan optimize`

- If you are using systemd try to restart all abuseio services

`systemctl restart abuseio_queue_collector.service`
`systemctl restart abuseio_queue_email_outgoing.service`
`systemctl restart abuseio_queue_email_incoming.service`
