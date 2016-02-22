@extends('layout')

@section('pageTitle', 'High level overview')

@section('content')
## Taking backups

The backup is a zipfile that contains all files in the directories you specify along with a dump of your database. 
This zipfile can automatically be copied over to [any of the filesystems you have configured in Laravel 5](http://laravel.com/docs/5.0/filesystem).

To take a command you can run `php artisan backup:run`. In most cases you want to schedule this command.

## Cleaning up old backups

If you keep on taking backups eventually you'll run out of disk space (or you'll have to pay a very large bill
for storage). To prevent this from happening the package can delete old backups.

## Monitoring the health of all backups

Optionally the package can check the health of the backups of your applications. A backup is considered unhealty if
the date of the last backup is too far in the past of if the backup becomes too large. In addition to 
monitoring the health of the application's own backups, backups of other applications can be monitored as well.
@endsection