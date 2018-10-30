update usuario set password=sha1('12345') where dni=26992014;
/*update usuario set password=sha1('12345678') where dni=43586324;*/

/*select usuario.nombre, usuario.apellido, menu.plato, estado_pedido.estado_pedido from pedido inner join 
usuario on pedido.dni=usuario.dni inner join menu on pedido.id_menu=menu.id_menu inner join estado_pedido 
on pedido.estado=estado_pedido.id_estado_pedido;*/