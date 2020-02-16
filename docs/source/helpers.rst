Helpers
==============
Helpers are a collection of functions.

=======  =======================================
Helpers  Description  
=======  =======================================  
Session  Helper functions related to Sessions
Str   	 Helper functions related to Strings
Url  	 Helper functions related to URL  
=======  =======================================

Sessions Helper
-------------------
The following are the static methods available:

.. code-block:: php
	
	Session::isSet( [$key=''] )
	
*Check if session is set*
	
**Parameters**:	

* $key (string) – Session's key

**Returns**:	
a Boolean

**Return type**:	
Boolean


.. code-block:: php
	
	Session::set( [$key='', $value=''] )
	
*Method for setting a session*
	
**Parameters**:	

* $key (string) – Key for session
* $value (string) –  Value to store in session

**Returns**:	
void

**Return type**:	
void


.. code-block:: php
	
	Session::get( [$key=''] )
	
*Getting value in a sesion*
	
**Parameters**:	

* $key (string) – session to get

**Returns**:	
Session's value | null

**Return type**:	
String | null


.. code-block:: php
	
	Session::remove( [$key=''] )
	
*Removing session*
	
**Parameters**:	

* $key (string) – session to get

**Returns**:	
void

**Return type**:	
void


String Helper
-------------------
The following are the static methods available:

.. code-block:: php
	
	Str::uuid()
	
*Generates a uuid*

**Returns**:	
a uuid

**Return type**:	
String


.. code-block:: php
	
	Str::encrypt_password( [$string=''] )
	
*Encrypts a string password*
	
**Parameters**:	

* $string (string) – String to encrypt

**Returns**:	
an encrypted password

**Return type**:	
String


.. code-block:: php
	
	Str::validate_password( [$password1='',$password2=''] )
	
*Validating if password is correct*
	
**Parameters**:	

* $password1 (string) – Validating if this matches to password2
* $password2 (string) – Validating if this matches to password1

**Returns**:	
if password matches

**Return type**:	
Boolean


URL Helper
-------------------
The following are the static methods available:

.. code-block:: php
	
	Url::redirect( [$page=''] )
	
*redirecting to a page*
	
**Parameters**:	

* $page (string) – Page to redirect you to

**Returns**:	
void

**Return type**:	
void




.. code-block:: php
	
	Url::secure_public( {$path=''} )
	
*Generates a fully secured qualified URL to the public directory or a path*
	
**Parameters**:	

* $path (string) – The path

**Returns**:	
secure URL to public directory or a path

**Return type**:	
String


.. code-block:: php
	
	Url::public( [$path=''] )
	
*Generates a fully qualified URL to the public directory or a path*
	
**Parameters**:	

* $path (string) – The path

**Returns**:	
URL to public directory or a path

**Return type**:	
String