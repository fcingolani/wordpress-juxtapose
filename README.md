# wordpress-juxtapose

Wordpress Plugin. Adds a [juxtapose] shortcode to embed Northwestern University Knight Lab's [JuxtaposeJS](http://juxtapose.knightlab.com/) frame comparisons.

## Usage

### 1. Get image URLs

You can get both image URLs from your WP Media Library:

![wp1](https://cloud.githubusercontent.com/assets/420163/7289471/15f43acc-e947-11e4-9510-3eca21f563e5.PNG)

### 2. Write a Juxtapose shortcode

Having both URLs, i.e.:
- http://localhost/wordpress/wp-content/uploads/2015/03/Hydrangeas.jpg
- http://localhost/wordpress/wp-content/uploads/2015/03/Desert.jpg

... you write a <code>juxtapose</code> shortcode in the Post WYSIWYG editor:

```
[juxtapose leftsrc="http://localhost/wordpress/wp-content/uploads/2015/03/Hydrangeas.jpg" rightsrc="http://localhost/wordpress/wp-content/uploads/2015/03/Desert.jpg"]
```

![w2](https://cloud.githubusercontent.com/assets/420163/7289605/c4aa2314-e948-11e4-9ff9-1dbe0cf21602.PNG)

### 3. Publish and enjoy

![w3](https://cloud.githubusercontent.com/assets/420163/7289675/b002f976-e949-11e4-9877-a5b39410af7f.gif)

## Shortcode Options

| Shortcode option | Default value | Valid values          | Notes                                                                                                                                           |
|------------------|---------------|-----------------------|-------------------------------------------------------------------------------------------------------------------------------------------------|
| startingposition | 50            | 0-100                 | %                                                                                                                                               |
| showlabels       | true          | true/false            | If true, your labels will be displayed. You must have labels for both images, or they won't be shown, even if this is true.                     |
| showcredits      | true          | true/false            | If true, image credits will be displayed below the slider. You must have credits for both images, or they won't be shown, even if this is true. |
| animate          | true          | true/false            | If true, the divider will glide to the point where someone clicks; otherwise, it will jump.                                                     |
| mode             | horizontal    | horizontal/vertical   | If "vertical", the divider will move vertically instead of horizontally.                                                                        |
| leftsrc          | none          | relative/absolute URL | Image URL. You can use WordPress media gallery URLs.                                                                                            |
| leftlabel        | none          | text                  |                                                                                                                                                 |
| leftcredit       | none          | text                  |                                                                                                                                                 |
| rightsrc         | none          | relative/absolute URL | Image URL. You can use WordPress media gallery URLs.                                                                                            |
| rightlabel       | none          | text                  |                                                                                                                                                 |
| rightcredit      | none          | text                  |  

## License

The MIT License (MIT)

Copyright (c) 2015 Federico Cingolani

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
