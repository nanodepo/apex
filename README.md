<p align="center">
  <img src="https://raw.githubusercontent.com/tailwindlabs/heroicons/master/.github/logo.svg" alt="Heroicons">
</p>

<p align="center">
  A set of 450+ free MIT-licensed high-quality SVG icons for you to use in your web projects. <br>Available as basic SVG icons and via first-party <a href="https://github.com/brnwls/laravel-heroicons">Laravel</a>, <a href="https://github.com/tailwindlabs/heroicons#react">React</a> and <a href="https://github.com/tailwindlabs/heroicons#vue">Vue</a> libraries.
<p>

<p align="center">
  <a href="https://heroicons.com"><strong>Browse at Heroicons.com &rarr;</strong></a>
</p>


## Usage

First, install `brnwls/laravel-heroicons` from composer:

```sh
composer require brnwls/laravel-heroicons
```

Now each icon can be imported individually as a Blade component.

#### Outline
```html
<x-icon::cube class="w-6 h-6" />
```

#### Solid
```html
<x-icon::cube-solid class="w-5 h-5" />
```

#### Animate
```html
<x-icon::cog class="w-12 h-12 animate-spin text-blue-400" />
```

Both icon styles are preconfigured to be stylable by setting the color CSS property, either manually or using utility classes like text-gray-500 in a framework like Tailwind CSS.

