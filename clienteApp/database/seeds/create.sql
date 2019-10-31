create database clientes;
create user clienteuser@localhost identified with mysql_native_password by 'Clavecliente1.';
grant all on clientes.* to clienteuser@localhost;

