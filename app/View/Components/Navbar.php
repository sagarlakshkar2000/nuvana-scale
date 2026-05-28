<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Navbar extends Component
{
  public $menuItems;

  public function __construct()
  {
    $this->menuItems = $this->buildMenu(config('menu.items', []));
  }

  protected function buildMenu(array $items): array
  {
    $currentRoute = request()->route() ? request()->route()->getName() : '';

    return array_map(function (array $item) use ($currentRoute) {
      $menuItem = (object) [
        'name' => $item['name'] ?? 'Menu',
        'url' => $this->resolveMenuUrl($item),
        'icon' => $item['icon'] ?? '',
        'class' => $item['class'] ?? '',
        'active' => $this->isActive($item, $currentRoute),
        'submenu' => [],
      ];

      if (!empty($item['submenu']) && is_array($item['submenu'])) {
        $menuItem->submenu = array_map(function (array $subItem) use ($currentRoute) {
          return (object) [
            'name' => $subItem['name'] ?? 'Submenu',
            'url' => $this->resolveMenuUrl($subItem),
            'active' => $this->isActive($subItem, $currentRoute),
            'class' => $subItem['class'] ?? '',
          ];
        }, $item['submenu']);

        if (
          !$menuItem->active && collect($menuItem->submenu)->contains(function ($subItem) {
            return $subItem->active;
          })
        ) {
          $menuItem->active = true;
        }
      }

      return $menuItem;
    }, $items);
  }

  protected function resolveMenuUrl(array $item): string
  {
    if (!empty($item['route'])) {
      return route($item['route']);
    }

    return $item['url'] ?? '#';
  }

  protected function isActive(array $item, string $currentRoute): bool
  {
    if (!empty($item['active'])) {
      return (bool) $item['active'];
    }

    if (!empty($item['route_pattern'])) {
      return Str::is($item['route_pattern'], $currentRoute);
    }

    if (!empty($item['route'])) {
      return $currentRoute === $item['route'];
    }

    return false;
  }

  public function render(): View|Closure|string
  {
    return view('components.navbar');
  }
}
