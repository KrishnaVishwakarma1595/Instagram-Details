# Instagram-Details

A simple php api to get any Instagram account details.

# Requirement

PHP 5.3 or higher

# Get Started

In order to use this api you just have to include the file and initialize the user by passing any Instagram username, then you are ready to go.

# Initialize the class and user

```

include 'instagram-details.php';

// initialize the class
$instagram = new Instagram();

// initialize the user
$instagram->initializeUser('INSTAGRAM_USERNAME');

```

# Available Methods

## Get account ID

```
// Get user's account id
$accountId = $instagram->getAccountId();

echo $accountId;

```

## Get Biography

```
$biography = $instagram->getBiography();
echo $biography;

```

## Get Profile Pic

```
$profilePic = $instagram->getProfilePic();
echo $profilePic;

$profilePicHd = $instagram->getProfilePicHd();
echo $profilePicHd;

```

## Get user's followers and follows count

```
$followersCount = $instagram->getFollowersCount();
echo $followersCount;

$followsCount = $instagram->getFollowsCount();
echo $followsCount;

```

## Check is account private or not

```
// return 1 for private and 0 for public
$checkPrivate = $instagram->is_private();
echo $checkPrivate;

```

## Get CSRF Token

```
$csrfToken = $instagram->getCsrfToken();
echo $csrfToken;

```

# Example

This example project, located in the `example/` folder, helps you to get started.

# Credit

Copyright (c) 2018 - Programmed by Krishna Vishwakarma
