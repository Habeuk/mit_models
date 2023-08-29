<?php

namespace Drupal\mit_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A contact section layout from mit_models
 *
 * @Layout(
 *   id = "mit_models_tab_pricing_section",
 *   label = @Translation(" Mit_Models : Tab Pricing "),
 *   category = @Translation("mit_moddels"),
 *   path = "layouts/sections",
 *   template = "mit_models_tab_pricing_section",
 *   library = "mit_models/mit_models_tab_pricing_section",
 *   default_region = "tab_pricing_stitle",
 *   regions = {
 *     "tab_pricing_stitle" = {
 *       "label" = @Translation("tab_pricing_stitle"),
 *     },
 *     "tab_pricing_title" = {
 *       "label" = @Translation("tab_pricing_title"),
 *     },
 *     "tab_pricing_description" = {
 *       "label" = @Translation("tab_pricing_description"),
 *     },
 *     "tab_pricing_one" = {
 *       "label" = @Translation("tab_pricing_one"),
 *     },
 *     "tab_pricing_two" = {
 *       "label" = @Translation("tab_pricing_two"),
 *     },
 *     "tab_pricing_slide_one" = {
 *       "label" = @Translation("tab_pricing_slide_one"),
 *     },
 *     "tab_pricing_slide_two" = {
 *       "label" = @Translation("tab_pricing_slide_two"),
 *     },
 *   }
 * )
 */

class MitModelsTabPricingSection extends FormatageModelsSection {

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'mit_models') . "/icones/sections/mit_models_tab_pricing_section.png");
    }
    
    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::build()
     */
    public function build(array $regions) {
        // TODO Auto-generated method stub
        $build = parent::build($regions);
        FormatageModelsThemes::formatSettingValues($build);
        return $build;
    }
    
    /**
     * 
     * {@inheritdoc}
     * 
     */
    function defaultConfiguration() {
        return [
            'load_libray' => true,
            'region_tag_title' => 'h1',
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Texte information',
                    'loader' => 'static'
                ],
                'fields' => [
                    "tab_pricing_stitle" => [
                        'text_html' => [
                            'label' =>"Small Title",
                            'value' => 'Our Values and Goals'
                        ]
                    ],
                    "tab_pricing_title" => [
                        'text_html' => [
                            'label' =>"title",
                            'value' => 'What We Do For Your Business'
                        ]
                    ],
                    "tab_pricing_description" => [
                        'text_html' => [
                            'label' =>"Description",
                            'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
                        ]
                    ],
                    "tab_pricing_one" => [
                        'text_html' => [
                            'label' =>"Type One",
                            'value' => 'monthly'
                        ]
                    ],
                    "tab_pricing_two" => [
                        'text_html' => [
                            'label' =>"Type Two",
                            'value' => 'yearly'
                        ]
                    ],
                    "tab_pricing_slide_one" => [
                        'text_html' => [
                            'label' =>"Pricing content one",
                            'value' => '<div class="  col-sm-6 item">
                                            <div class="single-pricing-card single-pricing-card--svg-bold">
                                                <div class="card-top">
                                                    <div class="back-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                                                            width="100" height="100" preserveAspectRatio="xMidYMid meet"
                                                            viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M9.19 6.35c-2.04 2.29-3.44 5.58-3.57 5.89L2 10.69l4.81-4.81l2.38.47zM11.17 17s3.74-1.55 5.89-3.7c5.4-5.4 4.5-9.62 4.21-10.57c-.95-.3-5.17-1.19-10.57 4.21C8.55 9.09 7 12.83 7 12.83L11.17 17zm6.48-2.19c-2.29 2.04-5.58 3.44-5.89 3.57L13.31 22l4.81-4.81l-.47-2.38zM9 18c0 .83-.34 1.58-.88 2.12C6.94 21.3 2 22 2 22s.7-4.94 1.88-6.12A2.996 2.996 0 0 1 9 18zm4-9c0-1.1.9-2 2-2s2 .9 2 2s-.9 2-2 2s-2-.9-2-2z" />
                                                        </svg>
                                                    </div>
                                                    <div class="head">
                                                        <p class="price first-price h4">
                                                            $700
                                                        </p>
                                                        <div class="head-svg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                                role="img"
                                                                width="40" height="40" preserveAspectRatio="xMidYMid meet"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M9.19 6.35c-2.04 2.29-3.44 5.58-3.57 5.89L2 10.69l4.81-4.81l2.38.47zM11.17 17s3.74-1.55 5.89-3.7c5.4-5.4 4.5-9.62 4.21-10.57c-.95-.3-5.17-1.19-10.57 4.21C8.55 9.09 7 12.83 7 12.83L11.17 17zm6.48-2.19c-2.29 2.04-5.58 3.44-5.89 3.57L13.31 22l4.81-4.81l-.47-2.38zM9 18c0 .83-.34 1.58-.88 2.12C6.94 21.3 2 22 2 22s.7-4.94 1.88-6.12A2.996 2.996 0 0 1 9 18zm4-9c0-1.1.9-2 2-2s2 .9 2 2s-.9 2-2 2s-2-.9-2-2z" />
                                                            </svg>
                                                        </div>
                                                        <h5 class="title h5">
                                                            professional
                                                        </h5>
                                                        <p class="price h2">
                                                            $700 <span class="price-duration">/month</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="counter-handler">
                                                    <button class=" ctrlBtn" id="decrement">-</button>
                                                    <input type="text" value="1" id="counterValue"
                                                        class="form-control text-center">
                                                    <button class=" ctrlBtn" id="increment">
                                                        +
                                                    </button>
                                                </div>
                                                <div class="card-middle">
                                                    <ul class="elements">
                                                        <li class="element">brand developpment</li>
                                                        <li class="element">market research</li>
                                                        <li class="element">Product solutions</li>
                                                        <li class="element">Product solutions</li>
                                                        <li class="element">user element</li>
                                                    </ul>
                                                </div>
                                                <div class="card-bottom">
                                                    <h3 class="price h3">
                                                        $1000
                                                    </h3>
                                                    <a href="#" class="choose">
                                                        <span class="link-text">
                                                            choose plan
                                                        </span>
                                                        <i class="svg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                                role="img"
                                                                width="0.88em"
                                                                height="1em" preserveAspectRatio="xMidYMid meet"
                                                                viewBox="0 0 448 512">
                                                                <path fill="currentColor"
                                                                    d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z" />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 item">
                                            <div class="single-pricing-card  single-pricing-card--svg-bold">
                                                <div class="card-top">
                                                    <div class="back-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                                                            width="100" height="100" preserveAspectRatio="xMidYMid meet"
                                                            viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M9.19 6.35c-2.04 2.29-3.44 5.58-3.57 5.89L2 10.69l4.81-4.81l2.38.47zM11.17 17s3.74-1.55 5.89-3.7c5.4-5.4 4.5-9.62 4.21-10.57c-.95-.3-5.17-1.19-10.57 4.21C8.55 9.09 7 12.83 7 12.83L11.17 17zm6.48-2.19c-2.29 2.04-5.58 3.44-5.89 3.57L13.31 22l4.81-4.81l-.47-2.38zM9 18c0 .83-.34 1.58-.88 2.12C6.94 21.3 2 22 2 22s.7-4.94 1.88-6.12A2.996 2.996 0 0 1 9 18zm4-9c0-1.1.9-2 2-2s2 .9 2 2s-.9 2-2 2s-2-.9-2-2z" />
                                                        </svg>
                                                    </div>
                                                    <div class="head">
                                                        <p class="price first-price h4">
                                                            $700
                                                        </p>
                                                        <div class="head-svg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                                role="img"
                                                                width="40" height="40" preserveAspectRatio="xMidYMid meet"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M9.19 6.35c-2.04 2.29-3.44 5.58-3.57 5.89L2 10.69l4.81-4.81l2.38.47zM11.17 17s3.74-1.55 5.89-3.7c5.4-5.4 4.5-9.62 4.21-10.57c-.95-.3-5.17-1.19-10.57 4.21C8.55 9.09 7 12.83 7 12.83L11.17 17zm6.48-2.19c-2.29 2.04-5.58 3.44-5.89 3.57L13.31 22l4.81-4.81l-.47-2.38zM9 18c0 .83-.34 1.58-.88 2.12C6.94 21.3 2 22 2 22s.7-4.94 1.88-6.12A2.996 2.996 0 0 1 9 18zm4-9c0-1.1.9-2 2-2s2 .9 2 2s-.9 2-2 2s-2-.9-2-2z" />
                                                            </svg>
                                                        </div>
                                                        <h5 class="title h5">
                                                            professional
                                                        </h5>
                                                        <p class="price h2">
                                                            $700 <span class="price-duration">/month</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="counter-handler">
                                                    <button class=" ctrlBtn" id="decrement">-</button>
                                                    <input type="text" value="1" id="counterValue"
                                                        class="form-control text-center">
                                                    <button class=" ctrlBtn" id="increment">
                                                        +
                                                    </button>
                                                </div>
                                                <div class="card-middle">
                                                    <ul class="elements">
                                                        <li class="element">brand developpment</li>
                                                        <li class="element">user analysis</li>
                                                        <li class="element">project management</li>
                                                        <li class="element">market research</li>
                                                        <li class="element">Product solutions</li>
                                                        <li class="element">user element</li>
                                                    </ul>
                                                </div>
                                                <div class="card-bottom">
                                                    <h3 class="price h3">
                                                        $1000
                                                    </h3>
                                                    <a href="#" class="choose">
                                                        <span class="link-text">
                                                            choose plan
                                                        </span>
                                                        <i class="svg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                                role="img"
                                                                width="0.88em"
                                                                height="1em" preserveAspectRatio="xMidYMid meet"
                                                                viewBox="0 0 448 512">
                                                                <path fill="currentColor"
                                                                    d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z" />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>'
                        ]
                    ],
                    "tab_pricing_slide_two" => [
                        'text_html' => [
                            'label' =>"Pricing content two",
                            'value' => '<div class="col-sm-6">
                                            <div class="single-pricing-card single-pricing-card--svg-bold">
                                                <div class="card-top">
                                                    <div class="back-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                                                            width="100" height="100" preserveAspectRatio="xMidYMid meet"
                                                            viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M9.19 6.35c-2.04 2.29-3.44 5.58-3.57 5.89L2 10.69l4.81-4.81l2.38.47zM11.17 17s3.74-1.55 5.89-3.7c5.4-5.4 4.5-9.62 4.21-10.57c-.95-.3-5.17-1.19-10.57 4.21C8.55 9.09 7 12.83 7 12.83L11.17 17zm6.48-2.19c-2.29 2.04-5.58 3.44-5.89 3.57L13.31 22l4.81-4.81l-.47-2.38zM9 18c0 .83-.34 1.58-.88 2.12C6.94 21.3 2 22 2 22s.7-4.94 1.88-6.12A2.996 2.996 0 0 1 9 18zm4-9c0-1.1.9-2 2-2s2 .9 2 2s-.9 2-2 2s-2-.9-2-2z" />
                                                        </svg>
                                                    </div>
                                                    <div class="head">
                                                        <p class="price first-price h4">
                                                            $7000
                                                        </p>
                                                        <div class="head-svg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                                role="img"
                                                                width="40" height="40" preserveAspectRatio="xMidYMid meet"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M9.19 6.35c-2.04 2.29-3.44 5.58-3.57 5.89L2 10.69l4.81-4.81l2.38.47zM11.17 17s3.74-1.55 5.89-3.7c5.4-5.4 4.5-9.62 4.21-10.57c-.95-.3-5.17-1.19-10.57 4.21C8.55 9.09 7 12.83 7 12.83L11.17 17zm6.48-2.19c-2.29 2.04-5.58 3.44-5.89 3.57L13.31 22l4.81-4.81l-.47-2.38zM9 18c0 .83-.34 1.58-.88 2.12C6.94 21.3 2 22 2 22s.7-4.94 1.88-6.12A2.996 2.996 0 0 1 9 18zm4-9c0-1.1.9-2 2-2s2 .9 2 2s-.9 2-2 2s-2-.9-2-2z" />
                                                            </svg>
                                                        </div>
                                                        <h5 class="title h5">
                                                            professional
                                                        </h5>
                                                        <p class="price h2">
                                                            $700 <span class="price-duration">/month</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="counter-handler">
                                                    <button class=" ctrlBtn" id="decrement">-</button>
                                                    <input type="text" value="1" id="counterValue"
                                                        class="form-control text-center">
                                                    <button class=" ctrlBtn" id="increment">
                                                        +
                                                    </button>
                                                </div>
                                                <div class="card-middle">
                                                    <ul class="elements">
                                                        <li class="element">brand developpment</li>
                                                        <li class="element">user analysis</li>
                                                        <li class="element">project management</li>
                                                        <li class="element">market research</li>
                                                        <li class="element">Product solutions</li>
                                                    </ul>
                                                </div>
                                                <div class="card-bottom">
                                                    <h3 class="price h3">
                                                        $1000
                                                    </h3>
                                                    <a href="#" class="choose">
                                                        <span class="link-text">
                                                            choose plan
                                                        </span>
                                                        <i class="svg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                                role="img"
                                                                width="0.88em"
                                                                height="1em" preserveAspectRatio="xMidYMid meet"
                                                                viewBox="0 0 448 512">
                                                                <path fill="currentColor"
                                                                    d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z" />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-pricing-card  single-pricing-card--svg-bold">
                                                <div class="card-top">
                                                    <div class="back-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                                                            width="100" height="100" preserveAspectRatio="xMidYMid meet"
                                                            viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M9.19 6.35c-2.04 2.29-3.44 5.58-3.57 5.89L2 10.69l4.81-4.81l2.38.47zM11.17 17s3.74-1.55 5.89-3.7c5.4-5.4 4.5-9.62 4.21-10.57c-.95-.3-5.17-1.19-10.57 4.21C8.55 9.09 7 12.83 7 12.83L11.17 17zm6.48-2.19c-2.29 2.04-5.58 3.44-5.89 3.57L13.31 22l4.81-4.81l-.47-2.38zM9 18c0 .83-.34 1.58-.88 2.12C6.94 21.3 2 22 2 22s.7-4.94 1.88-6.12A2.996 2.996 0 0 1 9 18zm4-9c0-1.1.9-2 2-2s2 .9 2 2s-.9 2-2 2s-2-.9-2-2z" />
                                                        </svg>
                                                    </div>
                                                    <div class="head">
                                                        <p class="price first-price h4">
                                                            $700
                                                        </p>
                                                        <div class="head-svg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                                role="img"
                                                                width="40" height="40" preserveAspectRatio="xMidYMid meet"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M9.19 6.35c-2.04 2.29-3.44 5.58-3.57 5.89L2 10.69l4.81-4.81l2.38.47zM11.17 17s3.74-1.55 5.89-3.7c5.4-5.4 4.5-9.62 4.21-10.57c-.95-.3-5.17-1.19-10.57 4.21C8.55 9.09 7 12.83 7 12.83L11.17 17zm6.48-2.19c-2.29 2.04-5.58 3.44-5.89 3.57L13.31 22l4.81-4.81l-.47-2.38zM9 18c0 .83-.34 1.58-.88 2.12C6.94 21.3 2 22 2 22s.7-4.94 1.88-6.12A2.996 2.996 0 0 1 9 18zm4-9c0-1.1.9-2 2-2s2 .9 2 2s-.9 2-2 2s-2-.9-2-2z" />
                                                            </svg>
                                                        </div>
                                                        <h5 class="title h5">
                                                            professional
                                                        </h5>
                                                        <p class="price h2">
                                                            $700 <span class="price-duration">/month</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="counter-handler">
                                                    <button class=" ctrlBtn" id="decrement">-</button>
                                                    <input type="text" value="1" id="counterValue"
                                                        class="form-control text-center">
                                                    <button class=" ctrlBtn" id="increment">
                                                        +
                                                    </button>
                                                </div>
                                                <div class="card-middle">
                                                    <ul class="elements">
                                                        <li class="element">brand developpment</li>
                                                        <li class="element">user analysis</li>
                                                        <li class="element">project management</li>
                                                        <li class="element">market research</li>
                                                        <li class="element">Product solutions</li>
                                                        <li class="element">user element</li>
                                                    </ul>
                                                </div>
                                                <div class="card-bottom">
                                                    <h3 class="price h3">
                                                        $1000
                                                    </h3>
                                                    <a href="#" class="choose">
                                                        <span class="link-text">
                                                            choose plan
                                                        </span>
                                                        <i class="svg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                                role="img"
                                                                width="0.88em"
                                                                height="1em" preserveAspectRatio="xMidYMid meet"
                                                                viewBox="0 0 448 512">
                                                                <path fill="currentColor"
                                                                    d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z" />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>'
                        ]
                    ]
                ]
            ]
        ] + parent::defaultConfiguration();
    }

}