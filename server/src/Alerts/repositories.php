<?php

$app['github.repository'] = $app->share(function () use ($app) {
    return new \Alerts\Repositories\Http\GitHub(
        $app['github']['client_id'],
        $app['github']['client_secret']
    );
});

$app['watchedRepos.repository'] = $app->share(function () use ($app) {
    return new \Alerts\Repositories\Dummy\WatchedRepos();
});

$app['users.repository'] = $app->share(function () use ($app) {
    return new \Alerts\Repositories\Pdo\Users(
        $app['pdo.service'],
        $app['converter.service']
    );
});
