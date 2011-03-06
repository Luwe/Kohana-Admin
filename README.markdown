# LJadmin module

*Start new admin back-ends for an application using basic configurations*

- **Version:** 0.1.0
- **URL:** <http://github.com/none>

## Description

This Kohana module is designed to act as a scaffold for admin backends almost every application needs. It uses the standard Auth module to distinguish admins from guests. Extending Controller_Admin will secure your admin pages from unwanted visitors.

By default, the File driver is used for simple authentication. Adding users can be done by editing config/auth.php (see Auth module).

This module doesn't provide a full admin layout. For a nice admin theme check here: <https://github.com/synapsestudios/kohana-admin-theme>.

## Used Kohana modules

- ### kohana/core
  - **url** : `https://github.com/kohana/core.git`
  - **version** : `3.1.x`
  
- ### modules/auth
	- **url** : `https://github.com/kohana/auth`
  - **version** : `3.1.x`
- ### modules/ljbase
	- **url** : `https://github.com/Luwe/Kohana-Base`
  - **version** : `0.2.0`

## Disclaimer

I'm not perfect, so don't use this module blindly without knowing what it does. Also, help is always appreciated when it comes to refining the sourcecode.

~ Lieuwe Jan Eilander
