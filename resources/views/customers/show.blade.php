<!DOCTYPE html>
<html>
  <head>
    <title>Car {{ $customer->id }}</title>
  </head>
  <body>
    <h1>Car {{ $customer->id }}</h1>
    <ul>
      <li>First Name: {{ $customer->CustFirstName }}</li>
      <li>Last Name: {{ $customer->CustLastName }}</li>
      <li>Address: {{ $customer->CustAddress }}</li>
    </ul>
  </body>
</html>
