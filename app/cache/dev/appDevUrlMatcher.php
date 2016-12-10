<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/propert')) {
            // property_overview
            if ($pathinfo === '/property/overview') {
                return array (  '_controller' => 'AppBundle\\Controller\\OfferingsController::propertyOverviewAction',  '_route' => 'property_overview',);
            }

            // properties-debt
            if ($pathinfo === '/properties/debt') {
                return array (  '_controller' => 'AppBundle\\Controller\\OfferingsController::propertiesDebtAction',  '_route' => 'properties-debt',);
            }

        }

        if (0 === strpos($pathinfo, '/san')) {
            // santa-maria
            if ($pathinfo === '/santa-maria') {
                return array (  '_controller' => 'AppBundle\\Controller\\OfferingsController::propertySantaMaria',  '_route' => 'santa-maria',);
            }

            // san-francisco-mall
            if ($pathinfo === '/san-francisco-mall') {
                return array (  '_controller' => 'AppBundle\\Controller\\OfferingsController::propertySanFranciscoMall',  '_route' => 'san-francisco-mall',);
            }

        }

        // western-logistic-center
        if ($pathinfo === '/western-logistic-center') {
            return array (  '_controller' => 'AppBundle\\Controller\\OfferingsController::propertyWesternLogistic',  '_route' => 'western-logistic-center',);
        }

        // properties-equity
        if ($pathinfo === '/properties/equity') {
            return array (  '_controller' => 'AppBundle\\Controller\\OfferingsController::propertiesEquityAction',  '_route' => 'properties-equity',);
        }

        if (0 === strpos($pathinfo, '/companies')) {
            // companies-debt
            if ($pathinfo === '/companies/debt') {
                return array (  '_controller' => 'AppBundle\\Controller\\OfferingsController::companiesDebtAction',  '_route' => 'companies-debt',);
            }

            // companies-equity
            if ($pathinfo === '/companies/equity') {
                return array (  '_controller' => 'AppBundle\\Controller\\OfferingsController::companiesEquityAction',  '_route' => 'companies-equity',);
            }

        }

        // debt_overview
        if (0 === strpos($pathinfo, '/debt/overview') && preg_match('#^/debt/overview/(?P<offering_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'debt_overview')), array (  '_controller' => 'AppBundle\\Controller\\OfferingsController::debtOverviewAction',));
        }

        // equity_overview
        if (0 === strpos($pathinfo, '/equity/overview') && preg_match('#^/equity/overview/(?P<offering_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'equity_overview')), array (  '_controller' => 'AppBundle\\Controller\\OfferingsController::equityOverviewAction',));
        }

        if (0 === strpos($pathinfo, '/offerings')) {
            // offerings_v3
            if ($pathinfo === '/offerings/v3') {
                return array (  '_controller' => 'AppBundle\\Controller\\OfferingsController::offeringsV3Action',  '_route' => 'offerings_v3',);
            }

            // offerings_overview
            if (0 === strpos($pathinfo, '/offerings/overview') && preg_match('#^/offerings/overview(?:/(?P<offering_id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offerings_overview')), array (  'offering_id' => 30,  '_controller' => 'AppBundle\\Controller\\OfferingsController::offeringsOverviewAction',));
            }

        }

        // invest_popup
        if ($pathinfo === '/invest-popup') {
            return array (  '_controller' => 'AppBundle\\Controller\\OfferingsController::investPopupAction',  '_route' => 'invest_popup',);
        }

        // my_profile
        if ($pathinfo === '/my-profile') {
            return array (  '_controller' => 'AppBundle\\Controller\\ProfileController::myProfileAction',  '_route' => 'my_profile',);
        }

        // edit_profile
        if ($pathinfo === '/edit-profile') {
            return array (  '_controller' => 'AppBundle\\Controller\\ProfileController::editProfileAction',  '_route' => 'edit_profile',);
        }

        if (0 === strpos($pathinfo, '/change-')) {
            // change_password
            if ($pathinfo === '/change-password') {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfileController::changePasswordAction',  '_route' => 'change_password',);
            }

            // change_email
            if ($pathinfo === '/change-email') {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfileController::changeEmailAction',  '_route' => 'change_email',);
            }

        }

        if (0 === strpos($pathinfo, '/my-')) {
            // my_investments
            if ($pathinfo === '/my-investments') {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfileController::myInvestmentsAction',  '_route' => 'my_investments',);
            }

            // my_wallet
            if ($pathinfo === '/my-wallet') {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfileController::myWalletAction',  '_route' => 'my_wallet',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\PublicController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            if (0 === strpos($pathinfo, '/_sign')) {
                // process_sign_up
                if ($pathinfo === '/_signup') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PublicController::processSignUpAction',  '_route' => 'process_sign_up',);
                }

                // sign_in
                if ($pathinfo === '/_signin') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PublicController::signInAction',  '_route' => 'sign_in',);
                }

            }

            // logout
            if ($pathinfo === '/_logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\PublicController::logoutAction',  '_route' => 'logout',);
            }

        }

        // about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'AppBundle\\Controller\\PublicController::aboutAction',  '_route' => 'about',);
        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'AppBundle\\Controller\\PublicController::contactUsAction',  '_route' => 'contact',);
        }

        // terms
        if ($pathinfo === '/terms') {
            return array (  '_controller' => 'AppBundle\\Controller\\PublicController::termsAction',  '_route' => 'terms',);
        }

        // privacy
        if ($pathinfo === '/privacy') {
            return array (  '_controller' => 'AppBundle\\Controller\\PublicController::privacyAction',  '_route' => 'privacy',);
        }

        // forgot_pwd
        if ($pathinfo === '/forgot-password') {
            return array (  '_controller' => 'AppBundle\\Controller\\PublicController::forgotPasswordAction',  '_route' => 'forgot_pwd',);
        }

        if (0 === strpos($pathinfo, '/re')) {
            // reset_pwd
            if ($pathinfo === '/reset-password') {
                return array (  '_controller' => 'AppBundle\\Controller\\PublicController::resetPasswordAction',  '_route' => 'reset_pwd',);
            }

            // repayment
            if ($pathinfo === '/repayment') {
                return array (  '_controller' => 'AppBundle\\Controller\\PublicController::repaymentAction',  '_route' => 'repayment',);
            }

        }

        // comofunciona
        if ($pathinfo === '/comofunciona') {
            return array (  '_controller' => 'AppBundle\\Controller\\PublicController::comoAction',  '_route' => 'comofunciona',);
        }

        // propiedades
        if ($pathinfo === '/propiedades') {
            return array (  '_controller' => 'AppBundle\\Controller\\PublicController::propiedadesAction',  '_route' => 'propiedades',);
        }

        // raise_capital
        if ($pathinfo === '/raise-capital') {
            return array (  '_controller' => 'AppBundle\\Controller\\RaisecapitalController::raiseCapitalAction',  '_route' => 'raise_capital',);
        }

        // my_applications
        if ($pathinfo === '/my-applications') {
            return array (  '_controller' => 'AppBundle\\Controller\\RaisecapitalController::myApplicationsAction',  '_route' => 'my_applications',);
        }

        if (0 === strpos($pathinfo, '/add-o')) {
            // add_organization
            if ($pathinfo === '/add-organization') {
                return array (  '_controller' => 'AppBundle\\Controller\\RaisecapitalController::addOrganizationAction',  '_route' => 'add_organization',);
            }

            // add_offering
            if ($pathinfo === '/add-offering') {
                return array (  '_controller' => 'AppBundle\\Controller\\RaisecapitalController::addOfferingAction',  '_route' => 'add_offering',);
            }

        }

        // signup
        if ($pathinfo === '/signup') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::signupAction',  '_route' => 'signup',);
        }

        // email_verification
        if ($pathinfo === '/email-verification') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::emailVerificationAction',  '_route' => 'email_verification',);
        }

        // resend_verification_email
        if ($pathinfo === '/_resend-verification-email') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::resendVerificationEmailAction',  '_route' => 'resend_verification_email',);
        }

        // complete_registration
        if ($pathinfo === '/complete-registration') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::completeRegistrationAction',  '_route' => 'complete_registration',);
        }

        // gbgroup
        if ($pathinfo === '/gbgroup') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::gbgroupAction',  '_route' => 'gbgroup',);
        }

        // contego
        if ($pathinfo === '/contego') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::contegoAction',  '_route' => 'contego',);
        }

        // app_sign_up
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'app_sign_up',);
        }

        // app_verify_email
        if ($pathinfo === '/verify-email') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::verifyEmailAction',  '_route' => 'app_verify_email',);
        }

        // kyc_check
        if ($pathinfo === '/kyc-check') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::KycCheckAction',  '_route' => 'kyc_check',);
        }

        // secondary_market
        if ($pathinfo === '/secondary-market') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecondarymarketController::secondaryMarketAction',  '_route' => 'secondary_market',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
