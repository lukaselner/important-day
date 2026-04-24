# Important Days with translation

A simple PHP function for formatting dates into a localized long format (day name, day, month name, year). Available in Czech and English versions.

## Versions

- **Czech** — `cs/fn-important-day.php`
- **English** — `en/fn-important-day.php`

## Example

Czech version:

    <?php
    require_once 'cs/fn-important-day.php';
    echo importantDay('1970-01-01');
    // Output: Čtvrtek, 1. ledna 1970

English version:

    <?php
    require_once 'en/fn-important-day.php';
    echo importantDay('1970-01-01');
    // Output: Thursday, January 1, 1970

## Usage

Include the desired language version into your project and call the function with a date string parsable by PHP's `date_create()`:

    <?php
    require_once 'cs/fn-important-day.php';
    echo importantDay('1970-01-01');

The function returns `false` if the input cannot be parsed as a valid date.

## Requirements

- PHP 5.4 or higher

## Author

**Lukáš Elner**
- E-mail: lukas@elner.cz
- Web: [lukaselner.cz](https://www.lukaselner.cz)

## License

This project is licensed under the **GNU General Public License v3.0** — see the [LICENSE](LICENSE) file or [gnu.org/licenses/gpl-3.0](https://www.gnu.org/licenses/gpl-3.0.html) for details.
