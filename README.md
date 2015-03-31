# wordpress-juxtapose

Wordpress Plugin. Adds a [juxtapose] shortcode to embed Northwestern University Knight Lab's [JuxtaposeJS](http://juxtapose.knightlab.com/) frame comparisons.

## Usage

Specify left and right images inside a *[juxtapose]* shortcode:

```
[juxtapose leftsrc="/wordpress/wp-content/uploads/2015/03/Hydrangeas.jpg" rightsrc="/wordpress/wp-content/uploads/2015/03/Desert.jpg"]
```

## Options

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
