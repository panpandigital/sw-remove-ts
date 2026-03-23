# DiyRemoveTs — Remove ts= Parameter from Media URLs

A lightweight Shopware 6 plugin that removes the `ts=` timestamp query parameter from media file URLs, introduced in Shopware 6.6.

## Problem

Since Shopware 6.6, a `ts=` timestamp parameter is appended to all media URLs (e.g. `/media/image.jpg?ts=1234567890`). While this is intended to bust caches on media updates, it causes issues with SEO — search engines may index duplicate content or treat timestamped URLs as separate resources.

## Solution

This plugin decorates Shopware's `AbstractMediaUrlGenerator` and returns clean URLs without any query parameters.

## Requirements

- Shopware `~6.6`

## Installation

```bash
composer require panpan-remove-ts/panpan-remove-ts
bin/console plugin:install --activate PanPanRemoveTs
bin/console cache:clear
```

## License

MIT — see [LICENSE](LICENSE).

## Author

[pan pan GmbH](https://panpan.digital)
