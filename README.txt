#GET
http://localhost:8000/wooloo-api/api/cores/filter-column/cores.id/filter-condition/equals/filter-value/1/order-column/cores.id/order-value/asc/page/1/1
http://localhost:8000/wooloo-api/api/cores/filter-column/cores.id/filter-condition/equals/filter-value/1/order-column/cores.id/order-value/asc/page/1
http://localhost:8000/wooloo-api/api/cores/filter-column/cores.id/filter-condition/equals/filter-value/1/order-column/cores.id/order-value/asc
http://localhost:8000/wooloo-api/api/cores/filter-column/cores.id/filter-condition/equals/filter-value/1
http://localhost:8000/wooloo-api/api/cores/filter-column/cores.id/filter-condition/not-equals/filter-value/1
http://localhost:8000/wooloo-api/api/cores/filter-column/cores.id/filter-condition/like/filter-value/1
http://localhost:8000/wooloo-api/api/cores/filter-column/cores.cor;cores.id/filter-condition/like;not-equals/filter-value/a;1
http://localhost:8000/wooloo-api/api/cores/filter-column/cores.id/filter-condition/between/filter-value/1%20AND%202
http://localhost:8000/wooloo-api/api/cores/filter-column/cores.id/filter-condition/less-than/filter-value/2
http://localhost:8000/wooloo-api/api/cores/filter-column/cores.id/filter-condition/less-equals/filter-value/2
http://localhost:8000/wooloo-api/api/cores/filter-column/cores.id/filter-condition/more-than/filter-value/1
http://localhost:8000/wooloo-api/api/cores/filter-column/cores.id/filter-condition/more-equals/filter-value/1
http://localhost:8000/wooloo-api/api/cores/filter-column/cores.id/filter-condition/in/filter-value/1,2
http://localhost:8000/wooloo-api/api/cores/filter-column/cores.id/filter-condition/not-in/filter-value/1,2
http://localhost:8000/wooloo-api/api/cores/order-column/cores.id/order-value/asc/page/1/1
http://localhost:8000/wooloo-api/api/cores/order-column/cores.id/order-value/asc/page/1
http://localhost:8000/wooloo-api/api/cores/order-column/cores.id/order-value/asc
http://localhost:8000/wooloo-api/api/cores/order-column/cores.id/order-value/desc
http://localhost:8000/wooloo-api/api/cores/resource/1
http://localhost:8000/wooloo-api/api/cores

#POST
http://localhost:8000/wooloo-api/api/cores
body -> x-www-form-urlencoded
key -> request
value -> { ... }

#PUT
http://localhost:8000/wooloo-api/api/cores/resource/1
body -> x-www-form-urlencoded
key -> request
value -> { ... }

#DELETE
http://localhost:8000/wooloo-api/api/cores/resource/1