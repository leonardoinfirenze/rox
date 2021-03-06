# BeWelcome Rox

[![Build Status](https://travis-ci.org/BeWelcome/rox.svg?branch=bootstrap3)](https://travis-ci.org/BeWelcome/rox)

Check [INSTALL](INSTALL.md) for installation instructions.

You probably want to get started by checking out the code in `module/`.

`htdocs/bw/` and `build/` are deprecated and the code needs to be rewritten in
`module`.

## Documentation

Documentation is [in the doc tree](doc/book/) and can be compiled using
[mkdocs](http://www.mkdocs.org):

```bash
$ mkdocs build
```

The result can then be accessed via `doc/html/` in your cloned repository.

PHP API documentation can also be generated using
[phpDox.](https://github.com/theseer/phpdox) phpDox integrates with numerous
continuous integration tools, so we recommend using the following `make` task to
get the full output:

```bash
make phpdox
```

The result can then be accessed via `doc/phpdox/` in your cloned repository.

## Useful links
* [Legacy developer space on Trac](http://trac.bewelcome.org/)
* [Writing great Git commit messages](http://chris.beams.io/posts/git-commit/)
* [Git crash course](http://git.or.cz/course/svn.html)


## Coding standards
* [PSR-1](http://www.php-fig.org/psr/psr-1/)
* [PSR-2](http://www.php-fig.org/psr/psr-2/)
