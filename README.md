# api

This repository acts as a central hub for API schema definitions
and the associated generated language files.

## Usage

Below, you'll find a list of available languages along with usage instructions.

### PHP

You can find the PHP package on [gaming-platform/satis](https://github.com/gaming-platform/satis).
Once you've included the repository in your `composer.json` file, you can proceed to install the
package with the following command.

```bash
composer require gaming-platform/api
```

## Contributing

You can find the schema definitions in the [/schema](/schema) directory.
To guarantee linting and identify breaking changes, the pipeline validates these
definitions using [buf](https://buf.build).

Alongside any modifications to the schema, please remember to commit the corresponding generated language files.
You can generate these files using the following command.

```bash
./project protoc
```
