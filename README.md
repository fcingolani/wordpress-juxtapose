# wordpress-juxtapose

Wordpress Plugin. Adds a [juxtapose] shortcode to embed Northwestern University Knight Lab's JuxtaposeJS frame comparisons.

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