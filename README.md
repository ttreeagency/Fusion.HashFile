# Hash File Wrapper for Neos Fusion

A slim wrapper around the ```hash_file``` PHP function.

## Fusion object

You can change the ```algo``` parameter to any support algorithm supported by the PHP function

    prototype(Ttree.Fusion.HashFile:Process) {
        algo = 'md5'
        resource = ${value}
    }

## Acknowledgments

Development sponsored by [ttree ltd - neos solution provider](http://ttree.ch).

We try our best to craft this package with a lots of love, we are open to sponsoring, support request, ... just contact us.

## License

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.
