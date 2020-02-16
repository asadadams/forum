Views
==============
View is just a web page you would want to display. This can be a header or a footer etc. Views can be loaded in a controller. 

Using the example controller you created in the controller page, let’s add a view to it.

Creating a View
----------------
Let's create a simple view and load it with the controller we have already created. Using a text editor, create a file called **dashboard.php** and save it to **app/Views** directory


.. code-block:: php
    :linenos:
	
	<html>
		<head>
			<title> My Dashbord</title>
		</head>
		<body>
			<h1Dashboard</h1>
			<p>Welcome to your dashboard</p>
		</body>
	</html>

Loading a View
---------------
To load the view in our **index** method in the controller

.. code-block:: php
	
	$this->view('dashboard');
	
.. note:: You don't need the .php extension

Error Handling
---------------
Blocks let you show 3 error pages by default, these are 404,401 and 500 pages. Blocks automatically shows a 404 page if a controller is not found. You can load a an error page in a controller by loading a view of 404,401 or 500

.. code-block:: php
	
	$this->view('404');
	
The default templates of these error pages are located at **app/Core/Exceptions/Views**
