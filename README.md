Form Builder Default Data
-------------------------

This module is an add-on for the commercial Form Builder module, used to define the default (import) data for newly created Form Builder forms. This can be useful e.g. in case you want all forms to have a specific set of fields by default.

The easiest way to use this module is to create a Form Builder form that serves as your "form template" and copy the form data from the "Export" tab to the field in the settings screen of Form Builder Default Data. The value is then automatically used for all forms that are created without specifying a value for the import data field.

## Installing the module

Form Builder Default Data is installed just like any regular ProcessWire module: via the built-in modules installer in the admin, or by copying/cloning the module's source code into the site/modules/ directory. Composer install is also available:

```
composer require avoineoy/form-builder-default-data
```
