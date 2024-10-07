import React, { useEffect, useState } from 'react';
import axios from 'axios';

function ArticleList() {
    const [articles, setArticles] = useState([]);

    useEffect(() => {
        // Appel API pour récupérer les articles
        axios.get('http://localhost:8000/api/articles')
            .then(response => {
                setArticles(response.data);
            })
            .catch(error => {
                console.error("Erreur lors de la récupération des articles", error);
            });
    }, []);

    return (
        <div>
            <h1>Liste des Articles</h1>
            <ul>
                {articles.map(article => (
                    <li key={article.id}>
                        <h2>{article.title}</h2>
                        <p>{article.content}</p>
                    </li>
                ))}
            </ul>
        </div>
    );
}

export default ArticleList;
