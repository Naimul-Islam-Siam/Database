-- count and show how many items each customer purchased
select Customer.cust_id, Customer.cust_name, count(*) as 'number_of_items_purchased'
from Customer, Item, Sale, Details
where Customer.cust_id = Details.cust_id and
    Item.item_id = Details.item_id and 
    Sale.bill_no = Details.bill_no
group by Customer.cust_id;


-- show the record of total price sold for each item
select Item.item_id, Item.item_name, Sale.qty_sold, Item.price, (Sale.qty_sold * Item.price) as total_price_sold
from Customer, Item, Sale, Details
where Customer.cust_id = Details.cust_id and
    Item.item_id = Details.item_id and 
    Sale.bill_no = Details.bill_no
group by Item.item_id;