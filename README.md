# Multisite URL Fixer

Fork of [`roots/multisite-url-fixer`](https://github.com/roots/multisite-url-fixer) with support for domain-mapped sites in subdirectory multisite installs.

## What this fixes

The original plugin appends `/wp` to `siteurl` only for `is_main_site() || is_subdomain_install()`. This means domain-mapped sites in a subdirectory multisite install don't get `/wp`, breaking `wp-login.php`, wp-admin CSS/JS, and other core assets.

This fork adds a check comparing the current site's domain against the network's domain. When they differ (domain-mapped site), `/wp` is appended regardless of install mode.

## Installation

Add the repository to your `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/oBusk/multisite-url-fixer"
    }
  ]
}
```

Then require the package (this replaces `roots/multisite-url-fixer`):

```sh
composer require obusk/multisite-url-fixer
```

If you're replacing the original, remove it first:

```sh
composer remove roots/multisite-url-fixer
composer require obusk/multisite-url-fixer
```

## Upstream

The fix has been submitted as [roots/multisite-url-fixer#14](https://github.com/roots/multisite-url-fixer/pull/14).
