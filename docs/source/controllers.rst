Controllers
==============

Controllers handles routing in Blocks. Controllers are class files that are associated to the URL. Consider the URL below::

	http://localhost/blocks/home/sayName/adams/asad

From this URL Blocks tries to find the controller **home** and call the method  **sayName**. **adams** and **asad** here are extra parameters passed to the controller. 

A simple Controller
-------------------

So let's create a very simple controller and let's see how it works. Create a file About.php and enter in the following code, then save it to **app/Controllers** directory. 

.. note:: Is a good coding convention start all classes with an upper case. Therefore **About.php**

.. code-block:: php
    :linenos:
	
	<?php

	class About extends Controller {

		public function index() {
			echo "This is the about page";
		}
	}


.. seealso:: All controllers must extend the **Controller** class

Now if you should visit::

	http://localhost/blocks/home 
	
OR::

	http://localhost/blocks/home/index 
	
You would see::
	
	This is the about page
	
.. note:: Index methods are automatically called


Passing params from URI to Controller
-------------------------------------
If your url contains more than 2 segments the rest will be passed to the controller as parameters::

	http://localhost/blocks/home/index/adams 

**adams** is therefore passed as a parameter and accepted in the controller as shown below

.. code-block:: php
    :linenos:
	
	<?php

	class About extends Controller {

		public function index($name) {
			echo "My name is".$name;
		}
	}
