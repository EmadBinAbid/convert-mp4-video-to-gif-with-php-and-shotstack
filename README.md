# Convert-MP4-to-GIF-Using-PHP

This PHP program converts MP4 to GIF using PHP, [Composer PHP SDK](https://github.com/shotstack/shotstack-sdk-php), and Shotstack API. See this [tutorial](link of the article) to learn how it works.

## What is Shotstack API?

Shotstack API is a cloud based video editing API that enables you to render multiple videos concurrently. See the available SDKs [here](https://shotstack.io/docs/guide/sdks/). Sign up for a free developer account [here](https://dashboard.shotstack.io/register?utm_source=github&utm_campaign=sample_repos) to get API key.

## Why Use Shotstack API?

Rendering videos is a resource consuming process. It may take several minutes to render one video depending on the complexity. Shotstack enables to concurrently render multiple videos in the powerful cloud infrastructure. This reduces rendering time and fastens the process. Visit our [Docs](https://shotstack.io/docs/guide/getting-started/core-concepts/?utm_source=github&utm_campaign=sample_repos) to learn more.

Checkout other PHP demo examples in this [Github repo](https://github.com/shotstack/php-demos/tree/main/examples).

## Requirements

Requires PHP 7.3+ and Composer.

## Installation

The recommended way to use the SDK is as a composer package. Install using the following commands:

```bash
composer install
composer require shotstack/shotstack-sdk-php
```

## Set your API Key

You can [get an API key](http://shotstack.io/?utm_source=github&utm_medium=demos&utm_campaign=php_sdk) via the Shotstack website.

## Run the Project

You can run the PHP script using the command as follows:

```bash
php mp4-to-gif.php
```

## Output

After running the command mentioned above, you will see the following output:

```
Render Successfully Queued >> Now check the progress of your render by running: >> php examples/status.php f7d4176a-2421-4097-a989-defff378a164
```

Now, go to the Shotstack's Dashboard and move on to the Renders Tab, where you will see the following output:

![Shotstack Dashboard](./Images/RenderDashboard.PNG)

Next, you just have to click on the **Link**, from where you will be able to see the following generated gif.

![GIF Output](https://cdn.shotstack.io/au/stage/7okmvmdcv8/03864bc7-cd82-4ba2-aeab-b888f3644a8d.gif?_gl=1*1p55cmc*_ga*MTM4NDkxNTczNi4xNjc3NjA2MjM1*_ga_0KPVTRT370*MTY3ODM4NTg0Ny43LjEuMTY3ODM4NTg4NS4wLjAuMA..&_ga=2.133091977.625403476.1678381798-1384915736.1677606235)

## Documentation

Documentation and reference guides for the Shotstack video editing API

* [Getting Started Guide]()
* [API Reference](https://shotstack.io/docs/api/)
* [Examples](https://github.com/shotstack/php-demos)
* [Shotstack Website](https://shotstack.io/)
