# Learning Sandbox Online

Free, instant access to default instances of Moodle versions for potential users who want to try it out, for existing users who want to see how Moodle behaves by default compared to their installations, for someone who quickly ones to try out a feature, and so forth.

## Limitations

The Moodle instances have the following necessary limitations:

* removal of the ability to install plugins. The removal of that ability is to protect the server from malicious users who might use plugins to take over the server or completely use up all disk space.

* removal of the ability to send email so that malicious users cannot use the server to send spam.

* automatic reset to default of every instance on the hour, every hour.

## Development

### Website

The website is built with [HydePHP](https://hydephp.com).

To develop the website locally, change to directory _files/website_.

Install the [Composer](https://getcomposer.org) dependencies with:

```shell
composer install
```

Install the [Node.js](https://nodejs.org) dependencies with:

```shell
npm install
```

Build the HTML pages from the templates with:

```shell
php hyde build
```

Build the styles with:

```shell
npm run prod
```

The build steps will create the *_site* directory that contains the static website.

To serve the website without running Ansible, use:

```shell
php hyde serve
```

This command automatically rebuilds the HTML every time a template is changed.

To automatically rebuild the styles when a class is added or removed from a template, run:

```shell
npm run watch
```

Unfortunately, this command crashes frequently because it cannot find the mix-manifest.json file to change its permissions (This is probably because the `php hyde serve` command empties the _site directory to which `npm run watch` writes. Not an ideal situation. The plan is to switch to Gulp.js from HydePHP).

### Ansible

To develop with Ansible locally, change to the project root directory.

Install the necessary Python packages:

```shell
pip install -r requirements.txt
```

Install Docker by following their [guide](https://docs.docker.com/engine/install/ubuntu/).

Run the playbook inside docker with:

```shell
molecule converge --scenario default
```

To view the website and Moodle instance inside docker, create the domain name _learningsandbox.test_ in your local _/etc/hosts_ file that points to 127.0.0.1.

## License

Copyright &copy; 2023 Geoffrey Bernardo van Wyk [(https://geoffreyvanwyk.dev)](https://geoffreyvanwyk.dev)

This file is part of Learning Sandbox Online.

Learning Sandbox Online is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

Learning Sandbox Online is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with Learning Sandbox Online. If not, see <https://www.gnu.org/licenses/>.
