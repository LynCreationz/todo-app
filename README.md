# Project List

A small Laravel application for account-based project lists. Each signed-in user can create, view, rename, and delete their own projects.

See [SETUP.md](../Documentation/SETUP.md) for prerequisites and local installation steps.

## Features

- Session-based account registration, login, and logout
- User-owned projects enforced through Eloquent relationships and scoped queries
- MySQL migration for projects and basic project-name validation
- Simple Blade interface

Authentication uses Laravel's built-in session guard and password hashing. Password reset and email verification are not included.
