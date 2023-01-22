<a name="readme-top"></a>

<div align="center">
    <h3 align="center">Backend Developer coding test</h3>
</div>

<!-- ABOUT THE TEST -->
## About the test

You're tasked to create a simple REST web service application for a fictional e-commerce business using Laravel.

You need to develop the following REST APIs:

* Products list
* Product detail
* Create product
* Update product
* Delete product

<!-- REQUIREMENTS -->
## Requirements

### Product specifications

A product needs to have the following information:

* Product name
* Product description
* Product price
* Created at
* Updated at

### API requirements

* Products list API
    * The products list API must be paginated.
* Create and Update product API
    * The product name, description, and price must be required.
    * The product name must accept a maximum of 255 characters.
    * The product price must be numeric in type and must accept up to two decimal places.
    * The created at and updated at fields must be in timestamp format.

Others:
* You are required to use MYSQL for the database storage in this test.
* You are free to use any library or component just as long as it can be installed using Composer.
* Don't forget to provide instructions on how to set the application up.

#### Q: The management requested a new feature where in the fictional e-commerce app must have a "featured products" section. How would you go about implementing this feature in the backend?

A: First is to plan the changes on the database structure, add another column on products table. The new column can be boolean and named ```is_featured```. Then add a new method on the product controller that will catch the frontend actions
that will update the specific resource on the database.

## Applicant Information

### JOHN CARLO OLIVER

## DESCRIPTION
Created a REST API using Laravel Sanctum for User Registration and Login,
and Product Creation, Listing, Viewing, Updating, and Deleting.

**POST /api/register**

*Params:*
```
name, email, password, confirm_password
```

*Return:*
```
- SUCCESS: User register successfully.
- ERROR: field_name required.
- ERROR: Invalid email format.
- ERROR: Password doesn't match.
```

**POST /api/login**

*Params:*
```
email, password
```

*Return:*
```
- SUCCESS: Access Token
- ERROR: Unauthorized Access.
```

**GET /api/products**

Product Listing

**GET /api/products/{id}**

Viewing of specific product.

*Return:*
```
- ERROR: Product not found.
```

**POST /api/products**

Create new product.

*Params:*
```
name, description, price
```

*Return:*
```
- SUCCESS: Product created successfully.
- ERROR: field_name required.
- ERROR: name maximum length.
- ERROR: price must be numeric.
```

**PUT /api/products/{id}**

Update product.

*Params:*
```
name, description, price
```

*Return:*
```
- SUCCESS: Product updated successfully.
- ERROR: field_name required.
- ERROR: name maximum length.
- ERROR: price must be numeric.
```

**DELETE /api/products/{id}**

Delete a product.
