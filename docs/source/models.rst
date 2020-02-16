Models
==============

Blocks uses Eloquent ORM from laravel to make modeling of data very easy. 

A simple Model
-------------------
So let's create a very simple **User** Model. Create a file User.php and enter in the following code, then save it to **app/Models** directory. 

.. note:: Is a good coding convention start all classes with an upper case. Therefore **About.php**
.. note:: We are assuming you have a **user** table in your database

.. code-block:: php
    :linenos:
	
	<?php
	namespace Models;

	use Illuminate\Database\Eloquent\Model as Eloquent;

	class User extends Eloquent {

		protected $table = 'user';

	}
	
.. seealso:: All Models must extend the **Illuminate\Database\Eloquent\Model** class and should be namespaced **Models**


Read  `Eloquent Docs <https://laravel.com/docs/4.2/eloquent>`_


Migrations
-------------

In software engineering, schema migration (also database migration, database change management) refers to the management of incremental, reversible changes and version control to relational database schemas. A schema migration is performed on a database whenever it is necessary to update or revert that database's schema to some newer or older version. Migrations are performed programmatically by using a schema migration tool. `Source: Wikipedia <https://en.wikipedia.org/wiki/Schema_migration>`_.  

Blocks can make Database migrations only with it's command-line tool (CLI) `Blocks-cli <https://github.com/asadadams/Blocks-cli>`_.  