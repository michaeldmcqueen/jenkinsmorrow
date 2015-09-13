# Set Up
`git clone git@github.com:michaeldmcqueen/jenkinsmorrow.git local`
`cd local`
`drush make build-base.make --working-copy -y`

Set up db and settings.php

`mkdir sites/default/files`
`chmod -R 777 sites/default/files`

Set up local url in MAMP
go to that url local.jenkinsandmorrow.com/install.php
go through base d7 install

`drush fra -y`
`drush cc all`

Work inside profiles/base