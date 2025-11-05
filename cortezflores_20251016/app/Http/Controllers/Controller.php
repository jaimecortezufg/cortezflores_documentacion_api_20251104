<?php

namespace App\Http\Controllers;
use OpenAPI\Attributes as OA;

/**
 * @OA\Info(
 *    version="1.0.0",
 *    title="Documentacion de API de Jaime Jeovanny Cortez Flores",
 *    description="API Desarrollada por Jaime Jeovanny Cortez Flores, para la Universidad Francisco Gavidia",
 *    @OA\Contact(
 *        email="jaimecortez@ufg.edu.sv"
 *    ),
 *    @OA\License(
 *        name="Apache 2.0",
 *        url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *    )
 * )
 * 
 * @OA\Server(
 *     url="http://localhost:8000/",
 *     description="Servidor local de desarrollo"
 * )
 * 
 * @OA\Server(
 *     url="http://testing.ejemplo.com/",
 *     description="Servidor para pruebas"
 * )
 * 
 * 
 * @OA\Server(
 *     url="http://jjcf.ejemplo.com",
 *     description="Servidor de produccion"
 * )
 * 
 * @OA\SecurityScheme(
 *   securityScheme="bearerAuth",
 *   type="http",
 *   scheme="bearer",
 *   name="Authorization",
 *   in="header"
 * )
 * 
 * @OA\Tag(
 *   name="Zonas",
 *   description="Proyecto de desarrollo de API para mantenimiento de tabla de bd Catalogos, espeficicamente para la tabla zona"
 * )
 * 
 */
abstract class Controller
{
    //
}
