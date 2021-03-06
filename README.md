# Gravity Forms Stripe Integration

[Gravity Forms Stripe](https://noorsplugin.com/gravity-forms-stripe-integration/) allows you to quickly and easily accept credit card payments onsite with WordPress. With this Stripe integration addon you can capture one-time credit card payments or setup recurring payment subscriptions. This addon was developed by [naa986](https://noorsplugin.com/) and is currently being used on thousands of websites.

## Features

- Automatically capture credit card payments with Stripe when a form is submitted.
- Set up and sell simple products or services in just minutes with one time credit card payments.
- Set up and configure Stripe recurring payment subscriptions.
- Configure your form to both create a post and accept a payment. The post is only created if the payment is approved.

## Requirements

- Gravity Forms v1.8.8+
- WordPress v3.8+
- SSL Certificate

## Gravity Form Setup

After installing the Stripe Add-On, the first thing you will need to do is configure your form to work with it. This is done by using the Pricing Fields to configure the purchase selections and the Credit Card field to allow users to enter their credit card information on the form.

- Go to **New Form** under the "Forms" navigation menu or choose an existing form from Edit Forms in your WordPress admin dashboard.
- Add Fields for capturing standard payment information such as Name, Email, Address, etc.
- Add **Pricing Fields** to your form such as Product, Total and configure them to suit your needs.
- Add a **Credit Card** Field from the Pricing Fields toolbox to your form.
- Save your form.

## Stripe Settings

Once you have created your form the way you want it, it's time to setup the Stripe Add-On and connect it to your Stripe account. This is done via Stripe's API and the setup requires you enter your Stripe API account credentials on the Stripe Add-On Settings page.

- Go to **Settings** under the Forms navigation in your WordPress admin dashboard.
- Select **Stripe** from the Settings sub-navigation.
- Select the API to use for Stripe integration (e.g. Live or Test).
- Enter the Test API keys for your Stripe account.
- Enter the Live API Keys for your Stripe account.
- Confirm that you have enabled Webhooks in Stripe by following the instructions provided in the Settings.

## Stripe Feeds Setup

In order to onfigure the form to integrate with Stripe you will need to create a feed.

- Go to the Stripe settings page located under the Forms Settings for the Form you'd like to integrate with Stripe.
- Select **Add New** to add a new Stripe Feed.
- Select the Stripe **Transaction Type**. You can choose from Products and Services which is a single one time payment, or Subscription for recurring payment subscriptions.
- Save your Stripe Feed.

For detailed setup instructions please visit the [Gravity Forms Stripe Integration](https://noorsplugin.com/gravity-forms-stripe-integration/) addon page.
