<?php

namespace ContainerYygPqgA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VBWoxXNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VBWoxXN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VBWoxXN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\AdminDashboardController::index' => ['privates', '.service_locator.OtsSqKs.App\\Controller\\AdminDashboardController::index()', 'getAdminDashboardControllerindexService', true],
            'App\\Controller\\AdminDashboardController::registerAdmin' => ['privates', '.service_locator.5SuUxla.App\\Controller\\AdminDashboardController::registerAdmin()', 'getAdminDashboardControllerregisterAdminService', true],
            'App\\Controller\\AdminDashboardController::manageRendezvous' => ['privates', '.service_locator.egipcEH.App\\Controller\\AdminDashboardController::manageRendezvous()', 'getAdminDashboardControllermanageRendezvousService', true],
            'App\\Controller\\AdminDashboardController::validateRendezvous' => ['privates', '.service_locator.PkcWAWa.App\\Controller\\AdminDashboardController::validateRendezvous()', 'getAdminDashboardControllervalidateRendezvousService', true],
            'App\\Controller\\AdminDashboardController::cancelRendezvous' => ['privates', '.service_locator.PkcWAWa.App\\Controller\\AdminDashboardController::cancelRendezvous()', 'getAdminDashboardControllercancelRendezvousService', true],
            'App\\Controller\\AppointmentController::index' => ['privates', '.service_locator.ufQKqF0.App\\Controller\\AppointmentController::index()', 'getAppointmentControllerindexService', true],
            'App\\Controller\\AppointmentController::new' => ['privates', '.service_locator.egipcEH.App\\Controller\\AppointmentController::new()', 'getAppointmentControllernewService', true],
            'App\\Controller\\AppointmentController::show' => ['privates', '.service_locator.4LMviQm.App\\Controller\\AppointmentController::show()', 'getAppointmentControllershowService', true],
            'App\\Controller\\AppointmentController::edit' => ['privates', '.service_locator.CW7CnPW.App\\Controller\\AppointmentController::edit()', 'getAppointmentControllereditService', true],
            'App\\Controller\\AppointmentController::delete' => ['privates', '.service_locator.CW7CnPW.App\\Controller\\AppointmentController::delete()', 'getAppointmentControllerdeleteService', true],
            'App\\Controller\\EspaceClientController::index' => ['privates', '.service_locator.A84gqGd.App\\Controller\\EspaceClientController::index()', 'getEspaceClientControllerindexService', true],
            'App\\Controller\\OrderController::index' => ['privates', '.service_locator.W3vCgFu.App\\Controller\\OrderController::index()', 'getOrderControllerindexService', true],
            'App\\Controller\\OrderController::new' => ['privates', '.service_locator.egipcEH.App\\Controller\\OrderController::new()', 'getOrderControllernewService', true],
            'App\\Controller\\OrderController::show' => ['privates', '.service_locator.KyJldkg.App\\Controller\\OrderController::show()', 'getOrderControllershowService', true],
            'App\\Controller\\OrderController::edit' => ['privates', '.service_locator.LEf9U9t.App\\Controller\\OrderController::edit()', 'getOrderControllereditService', true],
            'App\\Controller\\OrderController::delete' => ['privates', '.service_locator.LEf9U9t.App\\Controller\\OrderController::delete()', 'getOrderControllerdeleteService', true],
            'App\\Controller\\ProductController::index' => ['privates', '.service_locator.vCPEyuw.App\\Controller\\ProductController::index()', 'getProductControllerindexService', true],
            'App\\Controller\\ProductController::new' => ['privates', '.service_locator.egipcEH.App\\Controller\\ProductController::new()', 'getProductControllernewService', true],
            'App\\Controller\\ProductController::show' => ['privates', '.service_locator.GwIh.sb.App\\Controller\\ProductController::show()', 'getProductControllershowService', true],
            'App\\Controller\\ProductController::edit' => ['privates', '.service_locator.MFPVaGP.App\\Controller\\ProductController::edit()', 'getProductControllereditService', true],
            'App\\Controller\\ProductController::delete' => ['privates', '.service_locator.MFPVaGP.App\\Controller\\ProductController::delete()', 'getProductControllerdeleteService', true],
            'App\\Controller\\RegisterController::register' => ['privates', '.service_locator.5SuUxla.App\\Controller\\RegisterController::register()', 'getRegisterControllerregisterService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.3QECKYg.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'App\\Controller\\StockMovementController::index' => ['privates', '.service_locator.Z.XTIaF.App\\Controller\\StockMovementController::index()', 'getStockMovementControllerindexService', true],
            'App\\Controller\\StockMovementController::new' => ['privates', '.service_locator.egipcEH.App\\Controller\\StockMovementController::new()', 'getStockMovementControllernewService', true],
            'App\\Controller\\StockMovementController::show' => ['privates', '.service_locator.HZT2Ves.App\\Controller\\StockMovementController::show()', 'getStockMovementControllershowService', true],
            'App\\Controller\\StockMovementController::edit' => ['privates', '.service_locator.lFy6oZR.App\\Controller\\StockMovementController::edit()', 'getStockMovementControllereditService', true],
            'App\\Controller\\StockMovementController::delete' => ['privates', '.service_locator.lFy6oZR.App\\Controller\\StockMovementController::delete()', 'getStockMovementControllerdeleteService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.OzEre6h.App\\Controller\\UserController::index()', 'getUserControllerindexService', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.egipcEH.App\\Controller\\UserController::new()', 'getUserControllernewService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.EWAQaZu.App\\Controller\\UserController::show()', 'getUserControllershowService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.WkfvUVe.App\\Controller\\UserController::edit()', 'getUserControllereditService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.WkfvUVe.App\\Controller\\UserController::delete()', 'getUserControllerdeleteService', true],
            'App\\Controller\\VehicleController::index' => ['privates', '.service_locator.sygY1sx.App\\Controller\\VehicleController::index()', 'getVehicleControllerindexService', true],
            'App\\Controller\\VehicleController::new' => ['privates', '.service_locator.egipcEH.App\\Controller\\VehicleController::new()', 'getVehicleControllernewService', true],
            'App\\Controller\\VehicleController::show' => ['privates', '.service_locator.cAjDidu.App\\Controller\\VehicleController::show()', 'getVehicleControllershowService', true],
            'App\\Controller\\VehicleController::edit' => ['privates', '.service_locator.3RPStPZ.App\\Controller\\VehicleController::edit()', 'getVehicleControllereditService', true],
            'App\\Controller\\VehicleController::delete' => ['privates', '.service_locator.3RPStPZ.App\\Controller\\VehicleController::delete()', 'getVehicleControllerdeleteService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\AdminDashboardController:index' => ['privates', '.service_locator.OtsSqKs.App\\Controller\\AdminDashboardController::index()', 'getAdminDashboardControllerindexService', true],
            'App\\Controller\\AdminDashboardController:registerAdmin' => ['privates', '.service_locator.5SuUxla.App\\Controller\\AdminDashboardController::registerAdmin()', 'getAdminDashboardControllerregisterAdminService', true],
            'App\\Controller\\AdminDashboardController:manageRendezvous' => ['privates', '.service_locator.egipcEH.App\\Controller\\AdminDashboardController::manageRendezvous()', 'getAdminDashboardControllermanageRendezvousService', true],
            'App\\Controller\\AdminDashboardController:validateRendezvous' => ['privates', '.service_locator.PkcWAWa.App\\Controller\\AdminDashboardController::validateRendezvous()', 'getAdminDashboardControllervalidateRendezvousService', true],
            'App\\Controller\\AdminDashboardController:cancelRendezvous' => ['privates', '.service_locator.PkcWAWa.App\\Controller\\AdminDashboardController::cancelRendezvous()', 'getAdminDashboardControllercancelRendezvousService', true],
            'App\\Controller\\AppointmentController:index' => ['privates', '.service_locator.ufQKqF0.App\\Controller\\AppointmentController::index()', 'getAppointmentControllerindexService', true],
            'App\\Controller\\AppointmentController:new' => ['privates', '.service_locator.egipcEH.App\\Controller\\AppointmentController::new()', 'getAppointmentControllernewService', true],
            'App\\Controller\\AppointmentController:show' => ['privates', '.service_locator.4LMviQm.App\\Controller\\AppointmentController::show()', 'getAppointmentControllershowService', true],
            'App\\Controller\\AppointmentController:edit' => ['privates', '.service_locator.CW7CnPW.App\\Controller\\AppointmentController::edit()', 'getAppointmentControllereditService', true],
            'App\\Controller\\AppointmentController:delete' => ['privates', '.service_locator.CW7CnPW.App\\Controller\\AppointmentController::delete()', 'getAppointmentControllerdeleteService', true],
            'App\\Controller\\EspaceClientController:index' => ['privates', '.service_locator.A84gqGd.App\\Controller\\EspaceClientController::index()', 'getEspaceClientControllerindexService', true],
            'App\\Controller\\OrderController:index' => ['privates', '.service_locator.W3vCgFu.App\\Controller\\OrderController::index()', 'getOrderControllerindexService', true],
            'App\\Controller\\OrderController:new' => ['privates', '.service_locator.egipcEH.App\\Controller\\OrderController::new()', 'getOrderControllernewService', true],
            'App\\Controller\\OrderController:show' => ['privates', '.service_locator.KyJldkg.App\\Controller\\OrderController::show()', 'getOrderControllershowService', true],
            'App\\Controller\\OrderController:edit' => ['privates', '.service_locator.LEf9U9t.App\\Controller\\OrderController::edit()', 'getOrderControllereditService', true],
            'App\\Controller\\OrderController:delete' => ['privates', '.service_locator.LEf9U9t.App\\Controller\\OrderController::delete()', 'getOrderControllerdeleteService', true],
            'App\\Controller\\ProductController:index' => ['privates', '.service_locator.vCPEyuw.App\\Controller\\ProductController::index()', 'getProductControllerindexService', true],
            'App\\Controller\\ProductController:new' => ['privates', '.service_locator.egipcEH.App\\Controller\\ProductController::new()', 'getProductControllernewService', true],
            'App\\Controller\\ProductController:show' => ['privates', '.service_locator.GwIh.sb.App\\Controller\\ProductController::show()', 'getProductControllershowService', true],
            'App\\Controller\\ProductController:edit' => ['privates', '.service_locator.MFPVaGP.App\\Controller\\ProductController::edit()', 'getProductControllereditService', true],
            'App\\Controller\\ProductController:delete' => ['privates', '.service_locator.MFPVaGP.App\\Controller\\ProductController::delete()', 'getProductControllerdeleteService', true],
            'App\\Controller\\RegisterController:register' => ['privates', '.service_locator.5SuUxla.App\\Controller\\RegisterController::register()', 'getRegisterControllerregisterService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.3QECKYg.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'App\\Controller\\StockMovementController:index' => ['privates', '.service_locator.Z.XTIaF.App\\Controller\\StockMovementController::index()', 'getStockMovementControllerindexService', true],
            'App\\Controller\\StockMovementController:new' => ['privates', '.service_locator.egipcEH.App\\Controller\\StockMovementController::new()', 'getStockMovementControllernewService', true],
            'App\\Controller\\StockMovementController:show' => ['privates', '.service_locator.HZT2Ves.App\\Controller\\StockMovementController::show()', 'getStockMovementControllershowService', true],
            'App\\Controller\\StockMovementController:edit' => ['privates', '.service_locator.lFy6oZR.App\\Controller\\StockMovementController::edit()', 'getStockMovementControllereditService', true],
            'App\\Controller\\StockMovementController:delete' => ['privates', '.service_locator.lFy6oZR.App\\Controller\\StockMovementController::delete()', 'getStockMovementControllerdeleteService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.OzEre6h.App\\Controller\\UserController::index()', 'getUserControllerindexService', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.egipcEH.App\\Controller\\UserController::new()', 'getUserControllernewService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.EWAQaZu.App\\Controller\\UserController::show()', 'getUserControllershowService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.WkfvUVe.App\\Controller\\UserController::edit()', 'getUserControllereditService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.WkfvUVe.App\\Controller\\UserController::delete()', 'getUserControllerdeleteService', true],
            'App\\Controller\\VehicleController:index' => ['privates', '.service_locator.sygY1sx.App\\Controller\\VehicleController::index()', 'getVehicleControllerindexService', true],
            'App\\Controller\\VehicleController:new' => ['privates', '.service_locator.egipcEH.App\\Controller\\VehicleController::new()', 'getVehicleControllernewService', true],
            'App\\Controller\\VehicleController:show' => ['privates', '.service_locator.cAjDidu.App\\Controller\\VehicleController::show()', 'getVehicleControllershowService', true],
            'App\\Controller\\VehicleController:edit' => ['privates', '.service_locator.3RPStPZ.App\\Controller\\VehicleController::edit()', 'getVehicleControllereditService', true],
            'App\\Controller\\VehicleController:delete' => ['privates', '.service_locator.3RPStPZ.App\\Controller\\VehicleController::delete()', 'getVehicleControllerdeleteService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\AdminDashboardController::index' => '?',
            'App\\Controller\\AdminDashboardController::registerAdmin' => '?',
            'App\\Controller\\AdminDashboardController::manageRendezvous' => '?',
            'App\\Controller\\AdminDashboardController::validateRendezvous' => '?',
            'App\\Controller\\AdminDashboardController::cancelRendezvous' => '?',
            'App\\Controller\\AppointmentController::index' => '?',
            'App\\Controller\\AppointmentController::new' => '?',
            'App\\Controller\\AppointmentController::show' => '?',
            'App\\Controller\\AppointmentController::edit' => '?',
            'App\\Controller\\AppointmentController::delete' => '?',
            'App\\Controller\\EspaceClientController::index' => '?',
            'App\\Controller\\OrderController::index' => '?',
            'App\\Controller\\OrderController::new' => '?',
            'App\\Controller\\OrderController::show' => '?',
            'App\\Controller\\OrderController::edit' => '?',
            'App\\Controller\\OrderController::delete' => '?',
            'App\\Controller\\ProductController::index' => '?',
            'App\\Controller\\ProductController::new' => '?',
            'App\\Controller\\ProductController::show' => '?',
            'App\\Controller\\ProductController::edit' => '?',
            'App\\Controller\\ProductController::delete' => '?',
            'App\\Controller\\RegisterController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\StockMovementController::index' => '?',
            'App\\Controller\\StockMovementController::new' => '?',
            'App\\Controller\\StockMovementController::show' => '?',
            'App\\Controller\\StockMovementController::edit' => '?',
            'App\\Controller\\StockMovementController::delete' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\VehicleController::index' => '?',
            'App\\Controller\\VehicleController::new' => '?',
            'App\\Controller\\VehicleController::show' => '?',
            'App\\Controller\\VehicleController::edit' => '?',
            'App\\Controller\\VehicleController::delete' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\AdminDashboardController:index' => '?',
            'App\\Controller\\AdminDashboardController:registerAdmin' => '?',
            'App\\Controller\\AdminDashboardController:manageRendezvous' => '?',
            'App\\Controller\\AdminDashboardController:validateRendezvous' => '?',
            'App\\Controller\\AdminDashboardController:cancelRendezvous' => '?',
            'App\\Controller\\AppointmentController:index' => '?',
            'App\\Controller\\AppointmentController:new' => '?',
            'App\\Controller\\AppointmentController:show' => '?',
            'App\\Controller\\AppointmentController:edit' => '?',
            'App\\Controller\\AppointmentController:delete' => '?',
            'App\\Controller\\EspaceClientController:index' => '?',
            'App\\Controller\\OrderController:index' => '?',
            'App\\Controller\\OrderController:new' => '?',
            'App\\Controller\\OrderController:show' => '?',
            'App\\Controller\\OrderController:edit' => '?',
            'App\\Controller\\OrderController:delete' => '?',
            'App\\Controller\\ProductController:index' => '?',
            'App\\Controller\\ProductController:new' => '?',
            'App\\Controller\\ProductController:show' => '?',
            'App\\Controller\\ProductController:edit' => '?',
            'App\\Controller\\ProductController:delete' => '?',
            'App\\Controller\\RegisterController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\StockMovementController:index' => '?',
            'App\\Controller\\StockMovementController:new' => '?',
            'App\\Controller\\StockMovementController:show' => '?',
            'App\\Controller\\StockMovementController:edit' => '?',
            'App\\Controller\\StockMovementController:delete' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:show' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\VehicleController:index' => '?',
            'App\\Controller\\VehicleController:new' => '?',
            'App\\Controller\\VehicleController:show' => '?',
            'App\\Controller\\VehicleController:edit' => '?',
            'App\\Controller\\VehicleController:delete' => '?',
        ]);
    }
}
