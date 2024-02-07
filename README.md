<p align="center" dir="auto">
  <a href="https://heroicons.com/#gh-light-mode-only" rel="nofollow">
    <img src="https://github.com/tailwindlabs/heroicons/raw/master/.github/logo-light.svg" alt="Heroicons" width="300" style="max-width: 100%;">
  </a>
  <a href="https://heroicons.com/#gh-dark-mode-only" rel="nofollow">
    <img src="https://github.com/tailwindlabs/heroicons/raw/master/.github/logo-dark.svg" alt="Heroicons" width="300" style="max-width: 100%;">
  </a>
</p>

<p align="center">
  A set of 288*4 free MIT-licensed high-quality SVG icons for you to use in your web projects. <br>Available as basic SVG icons and via first-party <a href="https://github.com/brnwls/laravel-heroicons">Laravel</a>, <a href="https://github.com/tailwindlabs/heroicons#react">React</a> and <a href="https://github.com/tailwindlabs/heroicons#vue">Vue</a> libraries.
<p>

<p align="center">
  <a href="https://heroicons.com"><strong>Browse at Heroicons.com &rarr;</strong></a>
</p>


## Usage

First, install `nanodepo/heroicons` from composer:

```sh
composer require nanodepo/heroicons
```

Now each icon can be imported individually as a Blade component.

#### Outline
```html
<x-icon::cube />
```

#### Solid
```html
<x-icon::cube type="solid" />
```

#### Animate
```html
<x-icon::cog class="w-12 h-12 animate-spin text-blue-400" />
```

Both icon styles are preconfigured to be stylable by setting the color CSS property, either manually or using utility classes like text-gray-500 in a framework like Tailwind CSS.

