<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Laravel基礎 Eloquent ORM 課題</title>
 </head>
 
 <body>
     <table>
         <tr>
             <th>ID</th>
             <td>{{ $post->id }}</td>
         </tr>
         <tr>
             <th>タイトル</th>
             <td>{{ $post->title }}</td>
         </tr>
         <tr>
             <th>内容</th>
             <td>{{ $post->content }}</td>
         </tr>    
     </table>
 </body>
 
 </html>