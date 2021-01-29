select * from wishlist where product_id=$id and user_id=$uid

update wishlist set w_qty = $nq , w_amount = $amt where user_id = $uid and product_id = $id