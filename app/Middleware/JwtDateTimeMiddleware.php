<?php 
namespace App\Middleware;

use Psr\Http\Message\{
    ServerRequestInterface as Request,
    ResponseInterface as Response
};

final class JwtDateTimeMiddleware{
    public function __invoke(Request $request, Response $response, callable $next): Response{
        $token = $this->request->getAttribute('jwt');
        $expiredDate = new \DateTime($token['expired_at']);
        $now = new \DateTime();
        if($expiredDate < $now){
            return $this->response->withStatus(401);
        }
        $this->response = $this->next($request, $response);
        return $this->response;   
    }
}