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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/recrutement')) {
            // pw6_recrutement_home
            if (rtrim($pathinfo, '/') === '/recrutement') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pw6_recrutement_home');
                }

                return array (  '_controller' => 'PW6\\RecrutementBundle\\Controller\\RecrutementController::indexAction',  '_route' => 'pw6_recrutement_home',);
            }

            if (0 === strpos($pathinfo, '/recrutement/ad')) {
                // pw6_recrutement_view
                if (0 === strpos($pathinfo, '/recrutement/advert') && preg_match('#^/recrutement/advert/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pw6_recrutement_view')), array (  '_controller' => 'PW6\\RecrutementBundle\\Controller\\RecrutementController::viewAction',));
                }

                // pw6_recrutement_add
                if ($pathinfo === '/recrutement/add') {
                    return array (  '_controller' => 'PW6\\RecrutementBundle\\Controller\\RecrutementController::addAction',  '_route' => 'pw6_recrutement_add',);
                }

            }

            // pw6_recrutement_edit
            if (0 === strpos($pathinfo, '/recrutement/edit') && preg_match('#^/recrutement/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pw6_recrutement_edit')), array (  '_controller' => 'PW6\\RecrutementBundle\\Controller\\RecrutementController::editAction',));
            }

            // pw6_recrutement_delete
            if (0 === strpos($pathinfo, '/recrutement/delete') && preg_match('#^/recrutement/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pw6_recrutement_delete')), array (  '_controller' => 'PW6\\RecrutementBundle\\Controller\\RecrutementController::deleteAction',));
            }

            // pw6_recrutement_addAnonyme
            if (0 === strpos($pathinfo, '/recrutement/addAnonyme') && preg_match('#^/recrutement/addAnonyme/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pw6_recrutement_addAnonyme')), array (  '_controller' => 'PW6\\RecrutementBundle\\Controller\\RecrutementController::addAnonymeAction',));
            }

            // pw6_recrutement_gestionCandidat
            if ($pathinfo === '/recrutement/gestionCandidat') {
                return array (  '_controller' => 'PW6\\RecrutementBundle\\Controller\\RecrutementController::gestionCandidatAction',  '_route' => 'pw6_recrutement_gestionCandidat',);
            }

        }

        if (0 === strpos($pathinfo, '/formation')) {
            // pw6_formation_home
            if (rtrim($pathinfo, '/') === '/formation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pw6_formation_home');
                }

                return array (  '_controller' => 'PW6\\FormationBundle\\Controller\\AdvertController::indexAction',  '_route' => 'pw6_formation_home',);
            }

            if (0 === strpos($pathinfo, '/formation/a')) {
                if (0 === strpos($pathinfo, '/formation/ad')) {
                    // pw6_formation_view
                    if (0 === strpos($pathinfo, '/formation/advert') && preg_match('#^/formation/advert/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pw6_formation_view')), array (  '_controller' => 'PW6\\FormationBundle\\Controller\\AdvertController::viewAction',));
                    }

                    // pw6_formation_add
                    if ($pathinfo === '/formation/add') {
                        return array (  '_controller' => 'PW6\\FormationBundle\\Controller\\AdvertController::addAction',  '_route' => 'pw6_formation_add',);
                    }

                }

                // pw6_formation_apply
                if (0 === strpos($pathinfo, '/formation/apply') && preg_match('#^/formation/apply/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pw6_formation_apply')), array (  '_controller' => 'PW6\\FormationBundle\\Controller\\AdvertController::applyAction',));
                }

            }

            // pw6_formation_edit
            if (0 === strpos($pathinfo, '/formation/edit') && preg_match('#^/formation/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pw6_formation_edit')), array (  '_controller' => 'PW6\\FormationBundle\\Controller\\AdvertController::editAction',));
            }

            // pw6_formation_delete
            if (0 === strpos($pathinfo, '/formation/delete') && preg_match('#^/formation/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pw6_formation_delete')), array (  '_controller' => 'PW6\\FormationBundle\\Controller\\AdvertController::deleteAction',));
            }

            // pw6_formation_error
            if ($pathinfo === '/formation/error') {
                return array (  '_controller' => 'PW6\\FormationBundle\\Controller\\AdvertController::errorAction',  '_route' => 'pw6_formation_error',);
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // pw6_user_view
            if (0 === strpos($pathinfo, '/user/view') && preg_match('#^/user/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pw6_user_view')), array (  '_controller' => 'PW6\\UserBundle\\Controller\\UserController::viewAction',));
            }

            // pw6_user_edit
            if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pw6_user_edit')), array (  '_controller' => 'PW6\\UserBundle\\Controller\\UserController::editAction',));
            }

            // pw6_user_delete
            if (0 === strpos($pathinfo, '/user/delete') && preg_match('#^/user/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pw6_user_delete')), array (  '_controller' => 'PW6\\UserBundle\\Controller\\UserController::deleteAction',));
            }

            if (0 === strpos($pathinfo, '/user/admin')) {
                // pw6_admin_up
                if (0 === strpos($pathinfo, '/user/admin/up') && preg_match('#^/user/admin/up/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pw6_admin_up')), array (  '_controller' => 'PW6\\UserBundle\\Controller\\AdminController::upAction',));
                }

                // pw6_admin_add
                if ($pathinfo === '/user/admin/add') {
                    return array (  '_controller' => 'PW6\\UserBundle\\Controller\\AdminController::addAction',  '_route' => 'pw6_admin_add',);
                }

                // pw6_admin_index
                if ($pathinfo === '/user/admin/index') {
                    return array (  '_controller' => 'PW6\\UserBundle\\Controller\\AdminController::indexAction',  '_route' => 'pw6_admin_index',);
                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'PW6\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/s')) {
            // signin
            if ($pathinfo === '/signin') {
                return array (  '_controller' => 'PW6\\UserBundle\\Controller\\SecurityController::signinAction',  '_route' => 'signin',);
            }

            if (0 === strpos($pathinfo, '/statistique')) {
                // pw6_statistique_home
                if (rtrim($pathinfo, '/') === '/statistique') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pw6_statistique_home');
                    }

                    return array (  '_controller' => 'PW6\\StatistiqueBundle\\Controller\\GraphController::indexAction',  '_route' => 'pw6_statistique_home',);
                }

                // pw6_recrutement_sexe
                if ($pathinfo === '/statistique/sexe') {
                    return array (  '_controller' => 'PW6\\StatistiqueBundle\\Controller\\GraphController::sexeAction',  '_route' => 'pw6_recrutement_sexe',);
                }

                // pw6_recrutement_contrat
                if ($pathinfo === '/statistique/contrat') {
                    return array (  '_controller' => 'PW6\\StatistiqueBundle\\Controller\\GraphController::contratAction',  '_route' => 'pw6_recrutement_contrat',);
                }

                // pw6_recrutement_age
                if ($pathinfo === '/statistique/age') {
                    return array (  '_controller' => 'PW6\\StatistiqueBundle\\Controller\\GraphController::ageAction',  '_route' => 'pw6_recrutement_age',);
                }

                // pw6_recrutement_salaire
                if ($pathinfo === '/statistique/salaire') {
                    return array (  '_controller' => 'PW6\\StatistiqueBundle\\Controller\\GraphController::salaireAction',  '_route' => 'pw6_recrutement_salaire',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
