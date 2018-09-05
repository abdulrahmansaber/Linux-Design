<?php
  global $userData;
  global $fields;
  $fields = array(
    'username' => array(
      'db_name'     => 'username',
      'min_letters' => 5,
      'max_letters' => 50,
      'placeholder' => 'Please enter your username',
      'def_value'   => $userData['username'],
      'span'        => 'Username cannot be less than 5 letters and more than 50 Letters. Cannot contain characters',
      'error'       => 'Username cannot be empty.'
    ),
    'firstname' => array(
      'db_name'     => 'firstname',
      'min_letters' => 3,
      'max_letters' => 70,
      'placeholder' => 'Enter your Firstname',
      'def_value'   => $userData['firstname'],
      'span'        => 'Your firstname cannot contain characters. 3-70 Letters',
      'error'       => 'Firstname cannot be empty.'

    ),
    'lastname' => array(
      'db_name'     => 'lastname',
      'min_letters' => 3,
      'max_letters' => 70,
      'placeholder' => 'Enter your Lastname',
      'def_value'   => $userData['lastname'],
      'span'        => 'Your Lastname cannot contain characters. 3-70 Letters',
      'error'       => 'Please fill your Lastname'

    ),
    'email' => array(
      'db_name'     => 'email',
      'min_letters' => 7,
      'max_letters' => 80,
      'placeholder' => 'Your Email Address',
      'def_value'   => $userData['email'],
      'span'        => 'Email Address must be right, 7-80 Letters. Must Contain [@/.]',
      'error'       => 'Please enter your Email-Address'
    ),
    'location' => array(
      'db_name'     => 'location',
      'min_letters' => 5,
      'max_letters' => 50,
      'placeholder' => 'Your Location',
      'def_value'   => $userData['location'],
      'span'        => 'Must be only numbers. 5-50 Number',
      'error'       => 'Enter your address, city, town...'
    ),
    'phone' => array(
      'db_name'     => 'phone',
      'max_letters' => 50,
      'min_letters' => 5,
      'placeholder' => 'Please enter your phone',
      'def_value'   => $userData['phone'],
      'span'        => 'Cannot contain characters. Must Be Right',
      'error'       => 'Enter your own phone number'
    ),
  );
