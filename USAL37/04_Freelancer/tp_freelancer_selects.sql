use tp_freelancer;

select cat_name from customers_cats;

select customer_name, cat_name 
from customers 
join customers_cat on customers.cat_id = customers_cats.cat_id;


select job_title, customer_name, cat_name
from jobs
join customers on jobs.customer_id = customers.customer_id
join customers_cat on customers.cat_id = customers_cats.cat_id;

select 
jobs.job_title, 
jobs.customer_id, 
customers.customer_name, 
customers_cats.cat_name
from jobs
join customers on jobs.customer_id = customers.customer_id
join customers_cat on customers.cat_id = customers_cats.cat_id;

select 
job_title as 'Titre de la mission', 
J.customer_id, 
customer_name, 
cat_name
from jobs as J
join customers on J.customer_id = customers.customer_id
join customers_cat on customers.cat_id = customers_cats.cat_id;