[Documentation](https://laravel-news.com/testing-with-phpspec)


### Install PHPSPEC
```bash
$ composer init
$ composer require --dev phpspec/phpspec
```

#### Add Autoloader To ***composer.json***
```json
{
    "name": "predmond/calculator-phpspec",
    "require": {},
    "require-dev": {
        "phpspec/phpspec": "^4.0"
    },
    "autoload": {
        "psr-4": {
            "Predmond\\Calculator\\": "src/"
        }
    }
}
```


#### Config Suite
```yaml
suites:
    default:
        namespace: Predmond\Calculator
        psr4_prefix: Predmond\Calculator
	formatter.name: pretty
```

### The Workflow

> Our workflow with PhpSpec will typically look like the following steps:

1. Describe a Specification
2. Run the Specification (Create the class if it doesn’t exist)
3. Write an expected behavior
4. Run the specification (create the method if it doesn’t exist)
5. Write the implementation
6. Verify the behavior
7. Repeat



#### Create Suite
> ./vendor/bin/phpspec describe Predmond/Calculator/Calculator

#### Run Test
> ./vendor/bin/phpspec run