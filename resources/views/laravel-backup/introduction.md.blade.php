@extends('layout')

@section('pageTitle', 'Introduction')

@section('content')
<section class="badges">
    <a href="https://github.com/spatie/laravel-backup/releases"><img src="https://img.shields.io/github/release/spatie/laravel-backup.svg?style=flat-square" alt="Latest Version"></a>
    <a href="LICENSE.md"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></a>
    <a href="https://travis-ci.org/spatie/laravel-backup"><img src="https://img.shields.io/travis/spatie/laravel-backup/master.svg?style=flat-square" alt="Build Status"></a>
    <a href="https://insight.sensiolabs.com/projects/xxxx"><img src="https://img.shields.io/sensiolabs/i/xxxx.svg?style=flat-square" alt="SensioLabsInsight"></a>
    <a href="https://scrutinizer-ci.com/g/spatie/laravel-backup"><img src="https://img.shields.io/scrutinizer/g/spatie/laravel-backup.svg?style=flat-square" alt="Quality Score"></a>
    <a href="https://packagist.org/packages/spatie/laravel-backup"><img src="https://img.shields.io/packagist/dt/spatie/laravel-backup.svg?style=flat-square" alt="Total Downloads"></a>
</section>

This Laravel 5 package creates a backup of your application. The backup is a zipfile that contains all
files in the directories you specify along with a dump of your database. The backup can be stored
on [any of the filesystems you have configured in Laravel 5](http://laravel.com/docs/5.0/filesystem).

Feeling paranoid about backups? No problem! You can backup your application to multiple filesystems at once.

Once installed taking a backup of your files and databases is very easy. Just issue this artisan command:

``` bash
php artisan backup:run
```

In addition to taking the backup the package can also clean up old backups, monitor the health of the backups
and show an overview of all backups.
@endsection
