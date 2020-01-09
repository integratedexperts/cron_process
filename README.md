# WIP - Cron Process

Drupal module to discover and process items via cron, while tracking already processed items.

[![CircleCI](https://circleci.com/gh/integratedexperts/cron_process.svg?style=shield)](https://circleci.com/gh/integratedexperts/cron_process)

Local module development
------------------------

### Build
Run `.circleci/build.sh` to start inbuilt PHP server locally and run the same
commands as in CI, plus installing a site and your module automatically.

### Code linting
Run `.circleci/lint.sh` to lint your code according to the 
[Drupal coding standards](https://www.drupal.org/docs/develop/standards).

### Tests
Run `.circleci/test.sh` to run all test for your module.         

### Browsing SQLite database
To browse the content of created SQLite database 
(located at `/tmp/site_[MODULE_NAME].sqlite`), use [DB Browser for SQLite](https://sqlitebrowser.org/).
