# HTML

[Source](https://github.com/alphatrl/IS113/blob/master/studynotes/html_guide.md)

## Main Root

### `<html> ... </html>`

> Represents the root of an HTML document. All other elements must be a descendants of this element

```html
<!DOCTYPE html>
<html>
  <head></head>
  <body></body>
</html>
```

## Document Metadata

### `<head> ... </head>`

> Contains machine-readable information about the document, like its title, scripts and stylesheet

### `<link>`

> Specifies a relationship between the current document and an external resource. This element is commonly used to link stylesheets, but is also used to establish site icons

### `<style> ... </style>`

> The HTML `<style>` contain style information for a document or a part of a document

### `<title> ... </title>`

> The HTML Title element `<title>` defines the document’s title that is shown in a browser’s title bar or a page’s tab

```html
<!DOCTYPE html>
<html>
  <head>
    <title>This is a title</title>
  <head>
  <body></body>
</html>
```

## Sectioning Root

### `<body> ... </body>`

> The `<body>` element represents the content of an HTML document. There can only one `<body>` element in a document

```html
<html>
<head></head>
  <body>
    <p>This is a paragraph</p>
  </body>
</html>
```

## Content

### `<h1> to <h6> ... </h6>`

> The HTML `<h1> - <h6>` elements represents six levels of section heading. `<h1>` represents the highest section level and `<h6>` is the lowest

#### Header Example

```html
<h1>Header 1</h1>
<h2>Header 2</h2>
<h3>Header 3</h3>
<h4>Header 4</h4>
<h5>Header 5</h5>
<h6>Header 6</h6>
```

![`<h1> to <h6> preview`](https://i.imgur.com/mPb2Mtb.png)

### `<div> ... </div>`

> `<div>` is generic container for flow content. It has no effect on the content or layout until styled with

### `<hr>`

> In HTML5, `<hr>` represents a thematic break between paragraph-level elements

NOTE:

- In HTML 4.01, `<hr>` represents a horizontal rule

### Lists

#### `<li> ... </li>`

> `<li>` represents an item in a list

#### `<ol> ... </ol>`

> `<ol>` represents an ordered list of item, typically rendered as a numbered list

#### `<ul> ... </ul>`

> `<ul>` represents an unordered list of item, typically rendered as a bulleted list

#### Lists Example

```html
<ol>  
  <li>Ordered 1</li>
  <li>Ordered 2</li>
  <li>Ordered 3</li>
</ol>

<ul>  
  <li>Unordered 1</li>
  <li>Unordered 2</li>
  <li>Unordered 3</li>
</ul>
```

![Lists Preview](https://i.imgur.com/NcQlGfi.png)

### `<p> ... </p>`

> `<p>` represents a paragraph

### `<font> ... </font>`

> NOT SUPPORTED IN HTML5!

> `<font>` tag specifies font face, font size and color of text.

|Attribute |Value      |Description            |
|----------|-----------|-----------------------|
|color     |rgb(x,x,x) <br> #xxxxxx <br> _colorname_| Not supported in HTML5 <br> Specifies the color of text|
|face      |_font_family_| Not supported in HTML5 <br> Specfies the font of text|
|size      | _number_  | Not supported in HTML5 <br> Specifies the size of text |

```html
<font size="3" color="red">Hello There!</font>
<font face="verdana" color="blue">General Kenobi</font>
```

### `<a> ... </a>`

> `<a>` element or anchor element, with its href attribute, creates a hyperlink to web pages, files, email address, locations in the same page, or anything a URL can address

```html
<a href="../boomer_meme_1.jpg">See Boo Mer Meme</a>
<a href="google.com">Google</a>
```

### `<br>`

> `<br>` creates a line break  in text

### `<img>`

> `<img>` embeds an imgage into the document.

```html
<img src="./picture_1.jpg">
```

The `src` attribute specifies the URL (web address) of the image

### Table

#### `<table> ... </table>`

> Represents information in a table compromised of row and columns of cells of data

#### `<td> ... </td>`

> Represents a cell of a table containing data

#### `<tr> ... </tr>`

> Defines a row of cells in a table

#### `<th> ... </th>`

> Defines a cell as a header

#### Table Attributes

|    Align    | Value     |      Description          |
|-------------|-----------|---------------------------|
| align       | left <br> center <br> right   | Specifies the alignment of the text <br> **Not supported in HTML5**|
| bgcolor     | rbb(x,x,x) <br> _#xxxxxx_ <br> _colorname_ | Specifies the background color of a table/ cell <br> **Not supported in HTML5**       |
| rowspan     | _number_    | Specifies the number of rows a header cell should span|
|colspan| _number_           |  Specifies the number of columns a header cell should span|

#### Table Example

```html
<table border='1'>

  <tr>
    <th>Header 1</th>
    <th>Header 2</th>
    <th>Header 3</th>
  </tr>
  
  <tr>
    <td rowspan="2">rowspan=2</td>
    <td>Data Cell 2</td>
    <td>Data Cell 3</td>
  </tr>

  <tr>
    <td colspan="2">colspan=2</td>
  </tr>

</table>
```

![Table Example](https://i.imgur.com/6nx0XsE.png)

## Forms

### `<forms> ... </forms>`

> The `<form>` tag is used to create a HTML form

#### `<form>` Attributes

|Attribute |Value          |Description               |
|----------|---------------|--------------------------|
|action    |_URL_            |Specifies where to send the form-data when a form is submitted|
|method    |get <br> post  |Specifies the HTTP method to use when sending form-data|

#### `<input>`

> `<input>` tag speciies an input field where user can enter data

|Attribute |Value       |Description               |
|----------|------------|--------------------------|
|checked   |checked     |Specifies that an `<input>` element should be pre-selected when the page loads (for `type='checkbox`' or `type='radio'`)|
|name      |_text_      |Specifies the name of an `<input>` element|
|placeholder|_text_     |Specifies a short hint that describes the expected value of an `<input>` element|
|size      |_number_    |Specifies the width, in characters, of an `<input>` element|
|value     |_text_      |Specifies the value of an `<input>` element|
|type      |button <br> checkbox <br> color <br> date <br> datetime-local <br> email <br> file <br> hidden <br> image <br> month <br> number <br> password <br> radio <br> range <br> reset <br> search <br> submit <br> tel <br> text <br> time <br> url <br> week|Specifies the type of `<input>` element to display|

#### `<select> ... </select>`

> `<select>` element is used to create a drop-down list.

> The `<option>` tags inside `<select>` element defines the available options in the lists

#### `<textarea> .. </textarea>`

> `<textarea>` tag defines a multi-line text input control

##### `<textarea>` Attributes

|Attribute |Value       |Description                      |
|----------|------------|---------------------------------|
|cols      |_number_    |Specifies the visible width of a text area|
|rows      |_numeber_   |Specifies the visible number of lines in a text area|

#### `<label> ... </label>`

> `<label>` tag is used to increase hit area of a small input. (When the user clicks the text within the `<label>`, it will connect the input)

> `for` attribute of the `<label>` tag should be equal to the `id` attribute of the related element to bind them together

### `<form>` Examples

```html
<form action="action.php" method="POST">
  Input
  <input type="text" name="text1" placeholder="Input text"> <br>
  
  Input
  <input type="text" name="text2" value="Input text"> <br>

  <label for="text3">Input</label>
  <input type="text" name="text3" id="text3" value="Input Text"><br>

  <hr>

  <input type="radio" name="radio" value="mr"> Mr <br>
  <input type="radio" name="radio" value="ms"> Ms <br>
  <input type="radio" name="radio" value="dark-lord"> Stormageddon, Dark Lord of All <br>

  <hr>

  <input type="checkbox" name="meal[]" value="breakfast"> Breakfast <br>
  <input type="checkbox" name="meal[]" value="lunch"> Lunch <br>
  <input type="checkbox" name="meal[]" value="dinner"> Dinner <br>

  <hr>

  <textarea>Lorem Ipsum</textarea>

  <hr>

  <select name="cheese">
    <option value="brie">Brie</option>
    <option value="cheddar">Cheddar</option>
    <option value="parmesan">Parmesan</option>
  </select>

</form>
```

![Forms Example HTML](https://i.imgur.com/9y4TtEe.png)
