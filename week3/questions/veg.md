# Question 10 - Vegetables

Learning Outcomes:

- Practice displaying drop-down menu using HTML
- Get familiar with form submission via POST and GET

Go to **veg** directory. It contains the following:

|Item            | Description          |
|----------------|----------------------|
|index.php       | 1. An associative array `$vegTypeArr` whose key is vegetable name and value is the type of vegetable, and <br/> 2. An incomplete form that will submit to `process.php`|
|process.php     |An associative array `$vegQtyArr` whose key is vegetable name & value is the quantity available.
|Folder `img/` | Contains JPEG images of leafy vegetables: **cabbage.jpg**, **lettuce.jpg** and **spinach.jpg**.

## Part A (*)

1. Edit **index.php** to add a dropdown list of **leafy** vegetables

    - Get the vegetable names from the array **$vegTypeArr**
    - Do NOT hardcode the vegetable names.

1. If done correctly, the form should look like this:

    ![img1](https://i.imgur.com/D7bSPao.png)

## Part B (*)

1. Edit **process.php** to
    - Variable **$veg** is the selected vegetable (submitted form value).
    - Obtain the quantity from **$vegAtyArr**
    - Display the image of the vegetable as many times as the quantity.

1. For example, if the selected vegetable is ‘spinach’, there are 2 spinaches, thus, the page should look like this.

> ![partB](https://i.imgur.com/5M9nf0K.png)
