<?php
getRoute()->get('/setup', array('SetupController', 'setup'));
getRoute()->post('/setup', array('SetupController', 'setupPost'));
getRoute()->get('/setup/2', array('SetupController', 'setup2'));
getRoute()->post('/setup/2', array('SetupController', 'setup2Post'));
getRoute()->get('/setup/3', array('SetupController', 'setup3'));
getRoute()->post('/setup/3', array('SetupController', 'setup3Post'));
getRoute()->get('/setup/dropbox', array('SetupController', 'setupDropbox'));
getRoute()->post('/setup/dropbox', array('SetupController', 'setupDropboxPost'));
getRoute()->get('/setup/dropbox/callback', array('SetupController', 'setupDropboxCallback'));
getRoute()->get('/setup/restart', array('SetupController', 'setupRestart'));
