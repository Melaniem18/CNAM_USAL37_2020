use usal37_agence;

/**
AFFICHER le nom du client, son identifiant, son téléphone 
	+ les voyages associés (code du voyage, titre du voyage, et prix du voyage)
**/
/**
select client_lastname, C.client_id, client_phone, T.trip_code, trip_title, trip_price
from clients as C
join orders as O on C.client_id = O.client_id
join trips as T on T.trip_code = O.trip_code;
**/

select client_lastname, clients.client_id, client_phone, trips.trip_code, trip_title, trip_price
from clients
join orders on clients.client_id = orders.client_id
join trips on trips.trip_code = orders.trip_code;

/**
AFFICHER le nom du client, son identifiant, son téléphone 
	+ les voyages associés (code du voyage, titre du voyage, et prix du voyage)
    + le nom pays de destination du voyage
**/

select client_lastname, clients.client_id, client_phone, trips.trip_code, trip_title, trip_price, country_name
from clients
join orders on clients.client_id = orders.client_id
join trips on trips.trip_code = orders.trip_code
join cities on  trips.city_code = cities.city_code
join countries on cities.country_code = countries.country_code;




