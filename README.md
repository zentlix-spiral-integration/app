Cloning:
--------
Make sure to properly configure project if you cloned the existing repository.

```bash
$ copy .env.sample .env
$ php app.php encrypt:key -m .env
$ php app.php configure -vv
$ ./vendor/bin/rr get-binary
```
