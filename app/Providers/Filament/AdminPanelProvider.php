<?php

namespace App\Providers\Filament;

use App\Filament\Resources\ProductCategoriesResource;
use App\Models\Products;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\MenuItem;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->favicon(asset('favicon.png'))
            ->brandLogo(asset('logo.png'))
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])

            ->navigationGroups([
                'Profile Management',
                'Product Management',
                'Service Area Management',
                'Content Management',
                'Relation Management',
                'Settings & Configuration',
            ])

            ->navigationItems([
                NavigationItem::make()
                    ->label('About Us')
                    ->group('Profile Management'),
                NavigationItem::make()
                    ->label('Employees')
                    ->group('Profile Management'),
                NavigationItem::make()
                    ->label('Advantages')
                    ->group('Profile Management'),

                NavigationItem::make()
                    ->label('Products')
                    ->group('Product Management'),
                NavigationItem::make()
                    ->label('Categories')
                    ->group('Product Management')
                    ->url(fn(): string => ProductCategoriesResource::getUrl()),

                NavigationItem::make()
                    ->label('Locations')
                    ->group('Service Area Management'),
                NavigationItem::make()
                    ->label('Coverages')
                    ->group('Service Area Management'),


                NavigationItem::make()
                    ->label('Articles')
                    ->group('Content Management'),
                NavigationItem::make()
                    ->label('News')
                    ->group('Content Management'),
                NavigationItem::make()
                    ->label('FaQ')
                    ->group('Content Management'),
                NavigationItem::make()
                    ->label('Download Manager')
                    ->group('Content Management'),
                NavigationItem::make()
                    ->label('Menu Manager')
                    ->group('Content Management'),

                NavigationItem::make()
                    ->label('Partners')
                    ->group('Relation Management'),
                NavigationItem::make()
                    ->label('Customers')
                    ->group('Relation Management'),
                NavigationItem::make()
                    ->label('Subscribe Request')
                    ->group('Relation Management'),

                NavigationItem::make()
                    ->label('General')
                    ->group('Settings & Configuration'),
                NavigationItem::make()
                    ->label('Layouts')
                    ->group('Settings & Configuration'),
            ]);
    }
}
